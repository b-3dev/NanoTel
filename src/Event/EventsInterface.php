<?php

namespace NanoTel\Event;

interface EventsInterface
{
    public static function getEvents(): array;

    public static function InsertEvent(array $event): void;

    public static function has(string $item): bool;
}