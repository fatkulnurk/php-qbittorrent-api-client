<?php

namespace FatkulNurK\PHPQbittorrentApi;

use Fatkulnurk\PHPQbittorrentApi\Authentication\AuthenticationInterface;
use Fatkulnurk\PHPQbitttorrentApi\Application\ApplicationInterface;
use Fatkulnurk\PHPQbitttorrentApi\Log\LogInterface;
use Fatkulnurk\PHPQbitttorrentApi\Sync\SyncInterface;
use Fatkulnurk\PHPQbitttorrentApi\TransferInfo\TransferInfoInterface;

interface QbittorrentInterface
{
    public function authentication(): AuthenticationInterface;
    public function application(): ApplicationInterface;
    public function log(): LogInterface;
    public function sync(): SyncInterface;
    public function transferInfo(): TransferInfoInterface;
}
