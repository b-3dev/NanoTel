<?php

namespace NanoTel\Http;

interface HttpClientInterface
{
    public static function request(string $method, array $options = []): mixed;
}
