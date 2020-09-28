<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Application;

use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Application implements ApplicationInterface
{
    public function getApplicationVersion()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/version');

        return $response->getBody()->getContents();
    }

    public function getApiVersion()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/webapiVersion');

        return $response->getBody()->getContents();
    }

    public function getBuildInfo()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/buildInfo');

        return $response->getBody()->getContents();
    }

    public function shutdownApplication()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/shutdown');

        return $response->getBody()->getContents();
    }

    public function getApplicationPreferences()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/preferences');

        return $response->getBody()->getContents();
    }

    public function setApplicationPreferences(array $payload)
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/setPreferences', [
                'json' => $payload
            ]);

        return $response->getBody()->getContents();
    }

    public function getDefaultSavePath()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/app/defaultSavePath');

        return $response->getBody()->getContents();
    }
}