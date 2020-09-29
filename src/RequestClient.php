<?php

namespace Fatkulnurk\PHPQbittorrentApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class RequestClient
{
    public static function make(): ClientInterface
    {
        $client = new Client(
            [
            // Base URI is used with relative requests
            'base_uri' => Singleton::getInstance()->getBaseUri(),
            // You can set any number of default request options.
            'timeout'  => 2.0,
            ]
        );

        return $client;
    }
}
