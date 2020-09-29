<?php
namespace Fatkulnurk\PHPQbitttorrentApi\TransferInfo;

interface TransferInfoInterface
{
    /**
     * @return mixed
     */
    public function getGlobalTransferInfo();

    /**
     * @return mixed
     */
    public function getAlternativeSpeedLimitsState();

    /**
     * @return mixed
     */
    public function toggleAlternativeSpeedLimits();

    /**
     * @return mixed
     */
    public function getGlobalDownloadLimit();

    /**
     * @param  int $limit
     * @return mixed
     */
    public function setGlobalDownloadLimit(int $limit);

    /**
     * @return mixed
     */
    public function getGlobalUploadLimit();

    /**
     * @param  int $limit
     * @return mixed
     */
    public function setGlobalUploadLimit(int $limit);

    /**
     * @param  string $peers
     * @return mixed
     */
    public function banPeers(string $peers);
}
