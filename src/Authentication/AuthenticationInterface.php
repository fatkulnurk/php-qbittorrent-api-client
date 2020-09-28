<?php
namespace Fatkulnurk\PHPQbittorrentApi\Authentication;

interface AuthenticationInterface
{
    public function login(string $username, string $password);
    public function logout();
}