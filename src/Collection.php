<?php

namespace Fatkulnurk\PHPQbittorrentApi;

use Psr\Http\Message\ResponseInterface;

class Collection implements CollectionInterface
{
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public static function make(ResponseInterface $response)
    {
        return (new self($response));
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getStatusCode()
    {
        return $this->response->getStatusCode();
    }

    public function getBody()
    {
        return $this->response->getBody();
    }

    public function getContents()
    {
        return $this->response->getBody()->getContents();
    }

    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    public function get(): array
    {
        return [
            'http_status_code' => $this->getStatusCode(),
            'body' => $this->getBody(),
            'contents' => $this->getContents()
        ];
    }
}
