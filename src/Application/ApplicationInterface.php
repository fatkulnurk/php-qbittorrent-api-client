<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Application;

interface ApplicationInterface
{
    /**
     * @return mixed
     */
    public function getApplicationVersion();

    /**
     * @return mixed
     */
    public function getApiVersion();

    /**
     * @return mixed
     */
    public function getBuildInfo();

    /**
     * @return mixed
     */
    public function shutdownApplication();

    /**
     * @return mixed
     */
    public function getApplicationPreferences();

    /**
     * @param  array $payload
     * @return mixed
     */
    public function setApplicationPreferences(array $payload);
}
