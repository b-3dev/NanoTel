<?php

namespace NanoTel;

use NanoTel\Http\HttpClient;

class Bot {

    public static $BOT_TOKEN;

    public static $BASE_URL = "https://api.telegram.org/bot";

    private static $CLIENT;

    public function __construct(string $botToken, int $timeOut = 10, int $connectTimeOut = 5)
    {
        if (self::$BOT_TOKEN === null) {
            self::$BOT_TOKEN   = $botToken;
        }
        self::$BASE_URL .= self::$BOT_TOKEN;

        self::$CLIENT    = new HttpClient(self::$BASE_URL, $timeOut, $connectTimeOut);
    }
}
