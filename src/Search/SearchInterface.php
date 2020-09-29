<?php

namespace Fatkulnurk\PHPQbittorrentApi\Search;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

/**
 * Interface SearchInterface
 * @package Fatkulnurk\PHPQbittorrentApi\Search
 */
interface SearchInterface
{
    /**
     * @param string $pattern
     * @param string $plugins
     * @param string $category
     * @return CollectionInterface
     */
    public function startSearch(string $pattern, string $plugins, string $category): CollectionInterface;

    /**
     * @param int $id
     * @return CollectionInterface
     */
    public function stopSearch(int $id): CollectionInterface;

    /**
     * @param int $id
     * @return CollectionInterface
     */
    public function getSearchStatus(int $id): CollectionInterface;

    /**
     * @param int $id
     * @param int $limit
     * @param int $offset
     * @return CollectionInterface
     */
    public function getSearchResult(int $id, int $limit = 0, int $offset = 10): CollectionInterface;

    /**
     * @param int $id
     * @return CollectionInterface
     */
    public function deleteSearch(int $id): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getSearchPlugins(): CollectionInterface;

    /**
     * @param string $source
     * @return CollectionInterface
     */
    public function installSearchPlugin(string $source): CollectionInterface;

    /**
     * @param string $names
     * @return CollectionInterface
     */
    public function uninstallSearchPlugin(string $names): CollectionInterface;

    /**
     * @param string $names
     * @param bool $enable
     * @return CollectionInterface
     */
    public function enableSearchPlugin(string $names, bool $enable): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function updateSearchPlugins(): CollectionInterface;
}
