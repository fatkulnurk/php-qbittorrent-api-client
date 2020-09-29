<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Application;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Application implements ApplicationInterface
{
    public function getApplicationVersion()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/version');

        return Collection::make($response);
    }

    public function getApiVersion()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/webapiVersion');

        return Collection::make($response);
    }

    public function getBuildInfo()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/buildInfo');

        return Collection::make($response);
    }

    public function shutdownApplication()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/shutdown');

        return Collection::make($response);
    }

    public function getApplicationPreferences()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/preferences');

        return Collection::make($response);
    }

    public function setApplicationPreferences(array $payload)
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

    public function getDefaultSavePath()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/defaultSavePath');

        return Collection::make($response);
    }
}
