<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Sync;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Sync implements SyncInterface
{

    public function getMailData(int $rid)
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/sync/maindata',
                [
                'query' => [
                    'rid' => $rid
                ]
                ]
            );

        return Collection::make($response);
    }

    public function getTorrentPeersData(string $hash, int $rid)
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/sync/torrentPeers',
                [
                'query' => [
                    'hash' => $hash,
                    'rid' => $rid
                ]
                ]
            );

        return Collection::make($response);
    }
}
