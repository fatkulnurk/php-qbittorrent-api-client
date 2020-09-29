<?php

namespace Fatkulnurk\PHPQbitttorrentApi\TransferInfo;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

/**
 * Interface TransferInfoInterface
 * @package Fatkulnurk\PHPQbitttorrentApi\TransferInfo
 */
interface TransferInfoInterface
{
    /**
     * @return CollectionInterface
     */
    public function getGlobalTransferInfo(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getAlternativeSpeedLimitsState(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function toggleAlternativeSpeedLimits(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getGlobalDownloadLimit(): CollectionInterface;

    /**
     * @param  int $limit
     * @return CollectionInterface
     */
    public function setGlobalDownloadLimit(int $limit): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getGlobalUploadLimit(): CollectionInterface;

    /**
     * @param  int $limit
     * @return CollectionInterface
     */
    public function setGlobalUploadLimit(int $limit): CollectionInterface;

    /**
     * @param  string $peers
     * @return CollectionInterface
     */
    public function banPeers(string $peers): CollectionInterface;
}
