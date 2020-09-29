<?php

namespace Fatkulnurk\PHPQbitttorrentApi\TransferInfo;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use FatkulNurK\PHPQbittorrentApi\CollectionInterface;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class TransferInfo implements TransferInfoInterface
{
    public function getGlobalTransferInfo(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/info');

        return Collection::make($response);
    }

    public function getAlternativeSpeedLimitsState(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/speedLimitsMode');

        return Collection::make($response);
    }

    public function toggleAlternativeSpeedLimits(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/toggleSpeedLimitsMode');

        return Collection::make($response);
    }

    public function getGlobalDownloadLimit(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/downloadLimit');

        return Collection::make($response);
    }

    public function setGlobalDownloadLimit(int $limit): CollectionInterface
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

    public function getGlobalUploadLimit(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/transfer/uploadLimit');

        return Collection::make($response);
    }

    public function setGlobalUploadLimit(int $limit): CollectionInterface
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

    public function banPeers(string $peers): CollectionInterface
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
