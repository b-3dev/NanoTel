<?php

namespace NanoTel\Telegraph;

use NanoTel\Http\HttpClient;
use NanoTel\Telegraph\Builder\PageBuilder;

class Telegraph
{
    private static $CLIENT;

    private static $BASE_URL = "https://api.telegra.ph";

    public function __construct(int $timeOut = 10, int $connectTimeOut = 5) {
        self::$CLIENT = new HttpClient(self::$BASE_URL, $timeOut, $connectTimeOut);
    }

    public function createAccount(
        string $short_name,
        ?string $author_name = null,
        ?string $author_url = null
    ): mixed
    {
        $args = array_filter(get_defined_vars(), fn($value): bool => !($value === null || $value === ''));
        return self::$CLIENT::request('createAccount', $args);
    }

    public function editAccountInfo(
        string $access_token,
        ?string $short_name = null,
        ?string $author_name = null,
        ?string $author_url = null
    ): mixed
    {
        $args = array_filter(get_defined_vars(), fn($value): bool => !($value === null || $value === ''));
        return self::$CLIENT::request('editAccountInfo', $args);
    }

    public function getAccountInfo(string $access_token): mixed
    {
        $args = [
            'access_token'=> $access_token,
            'fields'      => ["short_name", "author_name", "author_url", "auth_url", "page_count"]
        ];
        return self::$CLIENT::request('getAccountInfo', $args);
    }

    public function revokeAccessToken(string $access_token): mixed
    {
        $args = [
            'access_token'=> $access_token
        ];
        return self::$CLIENT::request('revokeAccessToken', $args);
    }

    public function createPage(
        string $access_token,
        string $title,
        ?string $author_name = null,
        ?string $author_url = null
    ): PageBuilder {
        return new PageBuilder($access_token, $title, $author_name, $author_url);
    }

    public function editPage(
        string $access_token,
        string $path,
        string $title,
        PageBuilder $pageBuilder,
        ?string $author_name = null,
        ?string $author_url = null
    ): mixed
    {
        $args = array_filter([
            'access_token' => $access_token,
            'path' => $path,
            'title' => $title,
            'author_name' => $author_name,
            'author_url' => $author_url,
            'content' => json_encode($pageBuilder->getContent(), JSON_THROW_ON_ERROR),
            'return_content' => true
        ]);

        return self::$CLIENT::request('editPage', $args);
    }

    public function getPage(string $access_token, string $path): mixed
    {
        $args = [
            'access_token' => $access_token,
            'path' => $path,
            'return_content' => true
        ];
        return self::$CLIENT::request('getPage', $args);
    }

    public function getPageList(string $access_token, int $offset = 0, int $limit = 50): mixed
    {
        $limit = min($limit, 200);
        $args = [
            'access_token' => $access_token,
            'offset' => $offset,
            'limit' => $limit
        ];
        return self::$CLIENT::request('getPageList', $args);
    }
    
    public function getViews(
        string $access_token, 
        string $path, 
        ?int $year = null, 
        ?int $month = null, 
        ?int $day = null, 
        ?int $hour = null
    ): mixed
    {
        if ($year && ($year < 2000 || $year > 2100)) {
            $year = null;
        }
        if ($month && ($month < 1 || $month > 12)) {
            $month = null;
        }
        if ($day && ($day < 1 || $day > 31)) {
            $day = null;
        }
        if ($hour && ($hour < 0 || $hour > 24)) {
            $hour = null;
        }
    
        $args = array_filter(get_defined_vars(), fn($value) => !(is_null($value) || $value === ''));
        return self::$CLIENT::request('getViews', $args);
    }
}
