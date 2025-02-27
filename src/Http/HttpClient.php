<?php

namespace NanoTel\Http;

use NanoTel\Http\HttpClientInterface;
use GuzzleHttp\Client as GuzzleClient;

class HttpClient implements HttpClientInterface
{
    private static ?GuzzleClient $client = null;

    public function __construct(string $baseUri, int $timeOut, int $connectTimeOut)
    {
        self::$client = new GuzzleClient([
            'base_uri'        => "$baseUri/",
            'timeout'         => $timeOut,
            'connect_timeout' => $connectTimeOut,
            'http_errors'     => false,
        ]);
    }

    public static function request(string $method, array $options = []): mixed
    {
        if (!self::$client) {
            throw new \NanoTel\Exceptions\HttpClient\HttpClientNotInitialized("HTTP client is not initialized");
        }

        $response = static::$client->post($method, ['json' => $options]);

        return self::Handle($response);
    }

    private static function Handle($response): object
    {
        $data = json_decode($response->getBody()->getContents());
        $statusCode = $response->getStatusCode();

        if (empty($data)) {
            throw new \NanoTel\Exceptions\HttpClient\EmptyResponse("No response received from the server");
        }
        else if ($statusCode == 400) {
            throw new \NanoTel\Exceptions\Telegram\InvalidParameter("Invalid value provided");
        }
        else if ($statusCode == 200) {
            return (object) $data;
        }
    
        throw new \NanoTel\Exceptions\Telegram\RequestError("Request failed: " . ($data->description ?? "Unknown error") . " -> Code: {$statusCode}");
    }
}
