<?php

namespace Fatkulnurk\PHPQbittorrentApi\Search;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use FatkulNurK\PHPQbittorrentApi\CollectionInterface;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class Search implements SearchInterface
{
    public function startSearch(string $pattern, string $plugins, string $category): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/start',
                [
                    'query' => [
                        'pattern' => $pattern,
                        'plugins' => $plugins,
                        'category' => $category
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function stopSearch(int $id): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/stop',
                [
                    'query' => [
                        'id' => $id
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function getSearchStatus(int $id = 0): CollectionInterface
    {
        $query = [];

        if ($id != 0) {
            $query = ['id' => $id];
        }

        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/status',
                [
                    'query' => $query
                ]
            );

        return Collection::make($response);
    }

    public function getSearchResult(int $id, int $limit = 0, int $offset = 10): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/results',
                [
                    'query' => [
                        'id' => $id,
                        'limit' => $limit,
                        'offset' => $offset
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function deleteSearch(int $id): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/delete',
                [
                    'query' => [
                        'id' => $id
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function getSearchPlugins(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/search/plugins');

        return Collection::make($response);
    }

    public function installSearchPlugin(string $sources): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/installPlugin',
                [
                    'query' => [
                        'sources' => $sources
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function uninstallSearchPlugin(string $names): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/uninstallPlugin',
                [
                    'query' => [
                        'names' => $names
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function enableSearchPlugin(string $names, bool $enable): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/search/enablePlugin',
                [
                    'query' => [
                        'names' => $names,
                        'enable' => $enable
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function updateSearchPlugins(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/search/updatePlugins');

        return Collection::make($response);
    }
}
