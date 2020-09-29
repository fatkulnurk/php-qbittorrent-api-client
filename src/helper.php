<?php

use FatkulNurK\PHPQbittorrentApi\Qbittorrent;
use FatkulNurK\PHPQbittorrentApi\QbittorrentInterface;

if (!function_exists('qbittorrent')) {
    function qbittorrent(): QbittorrentInterface
    {
        return (new Qbittorrent());
    }
}
