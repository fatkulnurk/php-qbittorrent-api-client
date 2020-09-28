<?php

namespace Fatkulnurk\PHPQbitttorrentApi\TransferInfo;

use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class TransferInfo implements TransferInfoInterface
{
    public function getGlobalTransferInfo()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/info');

        return $response->getBody()->getContents();
    }

    public function getAlternativeSpeedLimitsState()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/speedLimitsMode');

        return $response->getBody()->getContents();
    }

    public function toggleAlternativeSpeedLimits()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/toggleSpeedLimitsMode');

        return $response->getBody()->getContents();
    }

    public function getGlobalDownloadLimit()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/downloadLimit');

        return $response->getBody()->getContents();
    }

    public function setGlobalDownloadLimit(int $limit)
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/setDownloadLimit', [
                'qeury' => [
                    'limit' => $limit
                ]
            ]);

        return $response->getBody()->getContents();
    }

    public function getGlobalUploadLimit()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/uploadLimit');

        return $response->getBody()->getContents();
    }

    public function setGlobalUploadLimit(int $limit)
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/setUploadLimit', [
                'qeury' => [
                    'limit' => $limit
                ]
            ]);

        return $response->getBody()->getContents();
    }

    public function banPeers(string $peers)
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/banPeers', [
                'qeury' => [
                    'peers' => $peers
                ]
            ]);

        return $response->getBody()->getContents();
    }
}