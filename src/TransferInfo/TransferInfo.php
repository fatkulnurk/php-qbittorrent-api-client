<?php

namespace Fatkulnurk\PHPQbitttorrentApi\TransferInfo;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class TransferInfo implements TransferInfoInterface
{
    public function getGlobalTransferInfo()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/info');

        return Collection::make($response);
    }

    public function getAlternativeSpeedLimitsState()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/speedLimitsMode');

        return Collection::make($response);
    }

    public function toggleAlternativeSpeedLimits()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/toggleSpeedLimitsMode');

        return Collection::make($response);
    }

    public function getGlobalDownloadLimit()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/downloadLimit');

        return Collection::make($response);
    }

    public function setGlobalDownloadLimit(int $limit)
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/transfer/setDownloadLimit',
                [
                'qeury' => [
                    'limit' => $limit
                ]
                ]
            );

        return Collection::make($response);
    }

    public function getGlobalUploadLimit()
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/uploadLimit');

        return Collection::make($response);
    }

    public function setGlobalUploadLimit(int $limit)
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/transfer/setUploadLimit',
                [
                'qeury' => [
                    'limit' => $limit
                ]
                ]
            );

        return Collection::make($response);
    }

    public function banPeers(string $peers)
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/transfer/banPeers',
                [
                'qeury' => [
                    'peers' => $peers
                ]
                ]
            );

        return Collection::make($response);
    }
}
