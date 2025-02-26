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

        $response = static::$client->post($method, ['json' => $options])->getBody()->getContents();

        return json_decode($response);
    }
}
