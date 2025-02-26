<?php

namespace NanoTel\Event;

interface EventsInterface
{
    public static function getEvents(): object;

    public static function InsertEvent(array $event): void;

    public static function has(string $item): bool;
}