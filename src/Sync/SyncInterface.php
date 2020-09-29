<?php

namespace Fatkulnurk\PHPQbitttorrentApi\Sync;

interface SyncInterface
{
    /**
     * @param  int $rid
     * @return mixed
     */
    public function getMailData(int $rid);

    /**
     * @param  string $hash
     * @param  int    $rid
     * @return mixed
     */
    public function getTorrentPeersData(string $hash, int $rid);
}
