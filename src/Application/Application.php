<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Application;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use FatkulNurK\PHPQbittorrentApi\CollectionInterface;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Application implements ApplicationInterface
{
    public function getApplicationVersion(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/version');

        return Collection::make($response);
    }

    public function getApiVersion(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/webapiVersion');

        return Collection::make($response);
    }

    public function getBuildInfo(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/buildInfo');

        return Collection::make($response);
    }

    public function shutdownApplication(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/shutdown');

        return Collection::make($response);
    }

    public function getApplicationPreferences(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/preferences');

        return Collection::make($response);
    }

    public function setApplicationPreferences(array $payload): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'POST',
                '/api/v2/app/setPreferences',
                [
                'json' => $payload
                ]
            );

        return Collection::make($response);
    }

    public function getDefaultSavePath(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/defaultSavePath');

        return Collection::make($response);
    }
}
