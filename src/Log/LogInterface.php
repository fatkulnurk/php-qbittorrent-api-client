<?php
namespace Fatkulnurk\PHPQbitttorrentApi\Log;

interface LogInterface
{
    public function getLog(
        bool $normal = true,
        bool $info = true,
        bool $warning = true,
        bool $critical = true,
        int $lastKnownID = -1
    );

    public function getPeerLog(int $lastKnownID);
}