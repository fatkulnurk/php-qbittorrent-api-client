<?php
namespace Fatkulnurk\PHPQbitttorrentApi\Sync;

interface SyncInterface
{
    public function getMailData(int $rid);
    public function getTorrentPeersData(string $hash, int $rid);
}