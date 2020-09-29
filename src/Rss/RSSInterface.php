<?php

namespace Fatkulnurk\PHPQbittorrentApi\Rss;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

interface RSSInterface
{
    public function addFolder(string $path): CollectionInterface;
    public function addFeed(string $url, string $path): CollectionInterface;
    public function removeItem(string $path): CollectionInterface;
    public function moveItem(string $itemPath, string $destPath): CollectionInterface;
    public function getAllItems(bool $withData): CollectionInterface;
    public function markAsRead(string $itemPath, string $articleID): CollectionInterface;
    public function refreshItem(string $itemPath): CollectionInterface;
    public function setAutoDownloadingRule(string $ruleName, string $ruleDef): CollectionInterface;
    public function renameAutoDownloadingRule(string $ruleName, string $newRuleName): CollectionInterface;
    public function removeAutoDownloadingRule(string $ruleName): CollectionInterface;
    public function getAllAutoDownloadingRules(): CollectionInterface;
    public function getAllArticlesMatchingRule(string $ruleName): CollectionInterface;
}
