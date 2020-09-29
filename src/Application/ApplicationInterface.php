<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Application;

use FatkulNurK\PHPQbittorrentApi\CollectionInterface;

/**
 * Interface ApplicationInterface
 * @package Fatkulnurk\PHPQbitttorrentApi\Application
 */
interface ApplicationInterface
{
    /**
     * @return CollectionInterface
     */
    public function getApplicationVersion(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getApiVersion(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getBuildInfo(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function shutdownApplication(): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getApplicationPreferences(): CollectionInterface;

    /**
     * @param  array $payload
     * @return CollectionInterface
     */
    public function setApplicationPreferences(array $payload): CollectionInterface;

    /**
     * @return CollectionInterface
     */
    public function getDefaultSavePath(): CollectionInterface;
}
