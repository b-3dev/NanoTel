<?php

namespace NanoTel\Bot;

class Bot {

    public static $BOT_TOKEN;

    public static $BASE_URL;

    public function __construct(string $botToken, string $baseUrl = null) {
        if (self::$BOT_TOKEN === null) {
            self::$BOT_TOKEN = $botToken;
        }
        self::$BASE_URL = (self::$BASE_URL === null) ? rtrim($baseUrl, '/') : "https://api.telegram.org/bot";
        
    }
}
