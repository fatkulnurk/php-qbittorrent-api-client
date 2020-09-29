<?php
namespace Fatkulnurk\PHPQbitttorrentApi\Log;

interface LogInterface
{
    /**
     * @param  bool $normal
     * @param  bool $info
     * @param  bool $warning
     * @param  bool $critical
     * @param  int  $lastKnownID
     * @return mixed
     */
    public function getLog(
        bool $normal = true,
        bool $info = true,
        bool $warning = true,
        bool $critical = true,
        int $lastKnownID = -1
    );

    /**
     * @param  int $lastKnownID
     * @return mixed
     */
    public function getPeerLog(int $lastKnownID);
}
