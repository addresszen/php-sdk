<?php

declare(strict_types=1);

namespace AddressZen\Transporters;

use AddressZen\Contracts\TransporterContract;
use AddressZen\Credentials;
use AddressZen\Exceptions\ApiException;
use AddressZen\Exceptions\TransporterException;
use AddressZen\Exceptions\UnserializableResponse;
use AddressZen\ValueObjects\BaseUri;
use AddressZen\ValueObjects\Payload;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * @internal
 */
final readonly class HttpTransporter implements TransporterContract
{
    /**
     * @param  array<string, string>  $headers
     */
    public function __construct(
        private ClientInterface $client,
        private RequestFactoryInterface $requestFactory,
        private StreamFactoryInterface $streamFactory,
        private BaseUri $baseUri,
        private Credentials $credentials,
        private array $headers,
    ) {}

    public function requestObject(Payload $payload): array
    {
        $response = $this->send($payload, 'application/json');
        $contents = (string) $response->getBody();

        try {
            $data = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new UnserializableResponse($response, $exception);
        }

        if (! is_array($data)) {
            throw new UnserializableResponse($response);
        }

        /** @var array<string, mixed> $data */
        return $data;
    }

    public function requestContent(Payload $payload): string
    {
        return (string) $this->send($payload, 'text/csv')->getBody();
    }

    private function send(Payload $payload, string $accept): ResponseInterface
    {
        $request = $payload->toRequest(
            $this->requestFactory,
            $this->streamFactory,
            $this->baseUri,
            $this->credentials,
            ['Accept' => $accept] + $this->headers,
        );

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $exception) {
            throw new TransporterException($exception);
        }

        if ($response->getStatusCode() >= 400) {
            throw ApiException::fromResponse($response);
        }

        return $response;
    }
}
