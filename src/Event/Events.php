<?php

namespace NanoTel\Event;

use NanoTel\Event\EventsInterface;

class Events implements EventsInterface
{
    private static array $events = [];

    public static function getEvents(): object
    {
        if (empty(self::$events)) {
            $response = file_get_contents("php://input");
            $decoded = json_decode($response, true);
            if ($decoded === null) {
                throw new \Exception("Invalid JSON received.");
            }
            self::$events = $decoded;
        }

        return (object) self::$events; 
    }

    public static function InsertEvent(array $event): void
    {
        self::$events = $event;
    }

    public static function has(string $item): bool
    {
        return array_key_exists($item, self::$events);
    }
}
