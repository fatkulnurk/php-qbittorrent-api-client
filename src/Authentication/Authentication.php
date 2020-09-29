<?php

namespace Fatkulnurk\PHPQbittorrentApi\Authentication;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use FatkulNurK\PHPQbittorrentApi\CollectionInterface;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Authentication implements AuthenticationInterface
{
    public function login(string $username, string $password): CollectionInterface
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

    public function logout(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('POST', '/api/v2/auth/login');

        return Collection::make($response);
    }
}
