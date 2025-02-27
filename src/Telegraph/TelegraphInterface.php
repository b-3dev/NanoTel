<?php

namespace NanoTel\Telegraph;

use NanoTel\Telegraph\Builder\PageBuilder;

interface TelegraphInterface
{
    public static function createAccount(
        string $short_name,
        ?string $author_name = null,
        ?string $author_url = null
    ): mixed;

    public static function editAccountInfo(
        string $access_token,
        ?string $short_name = null,
        ?string $author_name = null,
        ?string $author_url = null
    ): mixed;

    public static function getAccountInfo(string $access_token): mixed;

    public static function revokeAccessToken(string $access_token): mixed;

    public static function createPage(
        string $access_token,
        string $title,
        ?string $author_name = null,
        ?string $author_url = null
    ): PageBuilder;

    public static function editPage(
        string $access_token,
        string $path,
        string $title,
        PageBuilder $pageBuilder,
        ?string $author_name = null,
        ?string $author_url = null
    ): mixed;

    public static function getPage(string $access_token, string $path): mixed;

    public static function getPageList(string $access_token, int $offset = 0, int $limit = 50): mixed;

    public static function getViews(
        string $access_token, 
        string $path,
        ?int $year = null,
        ?int $month = null,
        ?int $day = null,
        ?int $hour = null
    ): mixed;
}
