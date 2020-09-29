<?php
namespace Fatkulnurk\PHPQbittorrentApi\Authentication;

interface AuthenticationInterface
{
    /**
     * @param  string $username
     * @param  string $password
     * @return mixed
     */
    public function login(string $username, string $password);

    /**
     * @return mixed
     */
    public function logout();
}
