<?php

namespace Fatkulnurk\PHPQbittorrentApi\Rss;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

/**
 * Interface RSSInterface
 * @package Fatkulnurk\PHPQbittorrentApi\Rss
 */
interface RSSInterface
{
    /**
     * @param string $path
     * @return CollectionInterface
     */
    public function addFolder(string $path): CollectionInterface;

    /**
     * @param string $url
     * @param string $path
     * @return CollectionInterface
     */
    public function addFeed(string $url, string $path): CollectionInterface;

    /**
     * @param string $path
     * @return CollectionInterface
     */
    public function removeItem(string $path): CollectionInterface;

    /**
     * @param string $itemPath
     * @param string $destPath
     * @return CollectionInterface
     */
    public function moveItem(string $itemPath, string $destPath): CollectionInterface;

    /**
     * @param bool $withData
     * @return CollectionInterface
     */
    public function getAllItems(bool $withData): CollectionInterface;

    /**
     * @param string $itemPath
     * @param string $articleID
     * @return CollectionInterface
     */
    public function markAsRead(string $itemPath, string $articleID): CollectionInterface;

    /**
     * @param string $itemPath
     * @return CollectionInterface
     */
    public function refreshItem(string $itemPath): CollectionInterface;

    /**
     * @param string $ruleName
     * @param string $ruleDef
     * @return CollectionInterface
     */
    public function setAutoDownloadingRule(string $ruleName, string $ruleDef): CollectionInterface;

    /**
     * @param string $ruleName
     * @param string $newRuleName
     * @return CollectionInterface
     */
    public function renameAutoDownloadingRule(string $ruleName, string $newRuleName): CollectionInterface;

    /**
     * @param string $ruleName
     * @return CollectionInterface
     */
    public function removeAutoDownloadingRule(string $ruleName): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getAllAutoDownloadingRules(): CollectionInterface;

    /**
     * @param string $ruleName
     * @return CollectionInterface
     */
    public function getAllArticlesMatchingRule(string $ruleName): CollectionInterface;
}
