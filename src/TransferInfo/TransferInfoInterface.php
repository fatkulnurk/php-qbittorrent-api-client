<?php
namespace Fatkulnurk\PHPQbitttorrentApi\TransferInfo;

interface TransferInfoInterface
{
    public function getGlobalTransferInfo();
    public function getAlternativeSpeedLimitsState();
    public function toggleAlternativeSpeedLimits();
    public function getGlobalDownloadLimit();
    public function setGlobalDownloadLimit(int $limit);
    public function getGlobalUploadLimit();
    public function setGlobalUploadLimit(int $limit);
    public function banPeers(string $peers);
}