<?php

namespace NanoTel\Telegraph\Builder;

use NanoTel\Http\HttpClient;

class PageBuilder
{
    protected string $access_token;
    protected string $title;
    protected ?string $author_name;
    protected ?string $author_url;
    protected array $content = [];
    protected array $allowedTags = [
        'a', 'aside', 'b', 'blockquote', 'br', 'code', 'em', 'figcaption', 
        'figure', 'h3', 'h4', 'hr', 'i', 'iframe', 'img', 'li', 'ol', 'p', 
        'pre', 's', 'strong', 'u', 'ul', 'video'
    ];
    protected array $allowedAttrs = ['href', 'src'];

    public function __construct(string $access_token, string $title, ?string $author_name = null, ?string $author_url = null)
    {
        if (empty($access_token)) {
            throw new \InvalidArgumentException("Access token cannot be empty.");
        }

        $this->access_token = $access_token;
        $this->title = $title;
        $this->author_name = $author_name;
        $this->author_url = $author_url;
    }

    public function content(string $tag, string|array $value, array $attrs = []): self
    {
        if (!in_array($tag, $this->allowedTags, true)) {
            throw new \InvalidArgumentException("Invalid tag: {$tag}");
        }

        $filteredAttrs = array_intersect_key($attrs, array_flip($this->allowedAttrs));

        $node = ['tag' => $tag];

        if (!empty($filteredAttrs)) {
            $node['attrs'] = $filteredAttrs;
        }

        $node['children'] = array_filter(is_array($value) ? $value : [$value]);

        $this->content[] = $node;
        return $this;
    }

    public function send(): mixed
    {
        $args = array_filter([
            'access_token' => $this->access_token,
            'title' => $this->title,
            'author_name' => $this->author_name,
            'author_url' => $this->author_url,
            'content' => json_encode($this->content, JSON_THROW_ON_ERROR),
            'return_content' => true
        ]);

        return HttpClient::request('createPage', $args);
    }

    public function getContent(): array
    {
        return $this->content;
    }
}
