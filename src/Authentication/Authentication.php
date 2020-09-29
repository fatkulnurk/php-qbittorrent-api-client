<?php
namespace Fatkulnurk\PHPQbittorrentApi\Authentication;

use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Authentication implements AuthenticationInterface
{
    public function login(string $username, string $password)
    {
        $request = RequestClient::make()
            ->request(
                'POST', '/api/v2/auth/login', [
                'form_params' => [
                    'username' => $username,
                    'password' => $password
                ],
                ]
            );

        return $request->getBody()->getContents();
    }

    public function logout()
    {
        $request = RequestClient::make()
            ->request('POST', '/api/v2/auth/login');

        return $request->getBody()->getContents();
    }
}
