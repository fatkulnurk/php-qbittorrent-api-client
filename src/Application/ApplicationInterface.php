<?php


namespace Fatkulnurk\PHPQbitttorrentApi\Application;


interface ApplicationInterface
{
    public function getApplicationVersion();
    public function getApiVersion();
    public function getBuildInfo();
    public function shutdownApplication();
    public function getApplicationPreferences();
    public function setApplicationPreferences(array $payload);
}