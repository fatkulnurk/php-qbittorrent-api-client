<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Sync;

use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Sync implements SyncInterface
{

    public function getMailData(int $rid)
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/sync/maindata', [
                'query' => [
                    'rid' => $rid
                ]
            ]);

        return $response->getBody()->getContents();
    }

    public function getTorrentPeersData(string $hash, int $rid)
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/sync/torrentPeers', [
                'query' => [
                    'hash' => $hash,
                    'rid' => $rid
                ]
            ]);

        return $response->getBody()->getContents();
    }
}