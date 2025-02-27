<?php

namespace NanoTel\Telegraph\Builder;

interface BuilderInterface
{
    public static function Init(string $access_token, string $title, ?string $author_name = null, ?string $author_url = null);
    
    public function content(string $tag, string|array $value, array $attrs = []): self;

    public function send(): mixed;

    public function getContent(): array;
}
