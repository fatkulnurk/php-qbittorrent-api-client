<?php


namespace Fatkulnurk\PHPQbittorrentApi\Search;


use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

interface SearchInterface
{
    public function startSearch(string $pattern, string $plugins, string $category): CollectionInterface;
    public function stopSearch(int $id): CollectionInterface;
    public function getSearchStatus(int $id): CollectionInterface;
    public function getSearchResult(int $id, int $limit = 0, int $offset = 10): CollectionInterface;
    public function deleteSearch(int $id): CollectionInterface;
    public function getSearchPlugins(): CollectionInterface;
    public function installSearchPlugin(string $source): CollectionInterface;
    public function uninstallSearchPlugin(string $names): CollectionInterface;
    public function enableSearchPlugin(string $names, bool $enable): CollectionInterface;
    public function updateSearchPlugins(): CollectionInterface;
}