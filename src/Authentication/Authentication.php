<?php

namespace Fatkulnurk\PHPQbittorrentApi\Authentication;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Authentication implements AuthenticationInterface
{
    public function login(string $username, string $password)
    {
        $response = RequestClient::make()
            ->request(
                'POST',
                '/api/v2/auth/login',
                [
                'form_params' => [
                    'username' => $username,
                    'password' => $password
                ],
                ]
            );

        return Collection::make($response);
    }

    public function logout()
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/auth/login');

        return Collection::make($response);
    }
}
