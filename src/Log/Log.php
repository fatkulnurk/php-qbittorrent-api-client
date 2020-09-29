<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Log;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use FatkulNurK\PHPQbittorrentApi\CollectionInterface;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Log implements LogInterface
{

    public function getLog(
        bool $normal = true,
        bool $info = true,
        bool $warning = true,
        bool $critical = true,
        int $lastKnownID = -1
    ): CollectionInterface {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/log/main',
                [
                'query' => [
                    'normal' => $normal,
                    'info' => $info,
                    'warning' => $warning,
                    'critical' => $critical,
                    'last_known_id' => $lastKnownID
                ]
                ]
            );

        return Collection::make($response);
    }

    public function getPeerLog(int $lastKnownID = -1): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                'peers',
                [
                'query' => [
                    'last_known_id' => $lastKnownID
                ]
                ]
            );

        return Collection::make($response);
    }
}
