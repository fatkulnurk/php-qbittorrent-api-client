<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Log;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

/**
 * Interface LogInterface
 * @package Fatkulnurk\PHPQbitttorrentApi\Log
 */
interface LogInterface
{
    /**
     * @param  bool $normal
     * @param  bool $info
     * @param  bool $warning
     * @param  bool $critical
     * @param  int  $lastKnownID
     * @return CollectionInterface
     */
    public function getLog(
        bool $normal = true,
        bool $info = true,
        bool $warning = true,
        bool $critical = true,
        int $lastKnownID = -1
    ): CollectionInterface;

    /**
     * @param  int $lastKnownID
     * @return CollectionInterface
     */
    public function getPeerLog(int $lastKnownID): CollectionInterface;
}
