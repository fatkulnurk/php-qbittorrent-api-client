<?php

namespace Fatkulnurk\PHPQbittorrentApi\Rss;

use Fatkulnurk\PHPQbittorrentApi\Collection;
use FatkulNurK\PHPQbittorrentApi\CollectionInterface;
use Fatkulnurk\PHPQbittorrentApi\RequestClient;

class RSS implements RSSInterface
{

    public function addFolder(string $path): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/addFolder',
                [
                    'query' => [
                        'path' => $path
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function addFeed(string $url, string $path = ''): CollectionInterface
    {
        $query = ['url' => $url];

        if (!empty($path)) {
            $query['path'] = $path;
        }

        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/addFeed',
                [
                    'query' => $query
                ]
            );

        return Collection::make($response);
    }

    public function removeItem(string $path): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/removeItem',
                [
                    'query' => [
                        'path' => $path
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function moveItem(string $itemPath, string $destPath): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/moveItem',
                [
                    'query' => [
                        'itemPath' => $itemPath,
                        'destPath' => $destPath
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function getAllItems(bool $withData): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/items',
                [
                    'query' => [
                        'withData' => $withData
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function markAsRead(string $itemPath, string $articleID = ''): CollectionInterface
    {
        $query = ['itemPath' => $itemPath];

        if (!empty($path)) {
            $query['articleId '] = $articleID;
        }

        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/markAsRead',
                [
                    'query' => $query
                ]
            );

        return Collection::make($response);
    }

    public function refreshItem(string $itemPath): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/refreshItem',
                [
                    'query' => [
                        'itemPath' => $itemPath
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function setAutoDownloadingRule(string $ruleName, string $ruleDef): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/setRule',
                [
                    'query' => [
                        'ruleName' => $ruleName,
                        'ruleDef' => $ruleDef
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function renameAutoDownloadingRule(string $ruleName, string $newRuleName): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/renameRule',
                [
                    'query' => [
                        'ruleName' => $ruleName,
                        'newRuleName' => $newRuleName
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function removeAutoDownloadingRule(string $ruleName): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/removeRule',
                [
                    'query' => [
                        'ruleName' => $ruleName
                    ]
                ]
            );

        return Collection::make($response);
    }

    public function getAllAutoDownloadingRules(): CollectionInterface
    {
        $response = RequestClient::make()
            ->request('GET', '/api/v2/rss/rules');

        return Collection::make($response);
    }

    public function getAllArticlesMatchingRule(string $ruleName): CollectionInterface
    {
        $response = RequestClient::make()
            ->request(
                'GET',
                '/api/v2/rss/matchingArticles',
                [
                    'query' => [
                        'ruleName' => $ruleName
                    ]
                ]
            );

        return Collection::make($response);
    }
}
