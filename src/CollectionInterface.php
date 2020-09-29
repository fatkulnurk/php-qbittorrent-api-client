<?php

namespace FatkulNurK\PHPQbittorrentApi;

use Psr\Http\Message\ResponseInterface;

interface CollectionInterface
{
    public function getStatusCode();
    public function getBody();
    public function getContents();
    public function getHeaders();

    public function getResponse(): ResponseInterface;
    public function get(): array;
}
