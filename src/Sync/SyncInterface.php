<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Sync;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

/**
 * Interface SyncInterface
 * @package Fatkulnurk\PHPQbitttorrentApi\Sync
 */
interface SyncInterface
{
    /**
     * @param  int $rid
     * @return CollectionInterface
     */
    public function getMailData(int $rid): CollectionInterface;

    /**
     * @param  string $hash
     * @param  int    $rid
     * @return CollectionInterface
     */
    public function getTorrentPeersData(string $hash, int $rid): CollectionInterface;
}
