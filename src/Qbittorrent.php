<?php

namespace Fatkulnurk\PHPQbittorrentApi;

use Fatkulnurk\PHPQbittorrentApi\{
    Authentication\Authentication,
    Authentication\AuthenticationInterface,
    Application\Application,
    Application\ApplicationInterface,
    Log\Log,
    Log\LogInterface,
    Sync\Sync,
    Sync\SyncInterface,
    TransferInfo\TransferInfo,
    TransferInfo\TransferInfoInterface
};

class Qbittorrent implements QbittorrentInterface
{
    public function authentication(): AuthenticationInterface
    {
        return (new Authentication());
    }

    public function application(): ApplicationInterface
    {
        return (new Application());
    }

    public function log(): LogInterface
    {
        return (new Log());
    }

    public function sync(): SyncInterface
    {
        return (new Sync());
    }

    public function transferInfo(): TransferInfoInterface
    {
        return (new TransferInfo());
    }
}
