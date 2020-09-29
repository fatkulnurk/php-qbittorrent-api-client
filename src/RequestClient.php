<?php

namespace Fatkulnurk\PHPQbittorrentApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;

class RequestClient
{
    public static function make(): ClientInterface
    {
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());
        $stack->push(add_header('Referer', Singleton::getInstance()->getBaseUri()));
        $client = new Client(
            [
                // Base URI is used with relative requests
                'base_uri' => Singleton::getInstance()->getBaseUri(),
                // You can set any number of default request options.
                'timeout'  => 2.0,
                'handler' => $stack
            ]
        );

        return $client;
    }
}

function add_header($header, $value)
{
    return function (callable $handler) use ($header, $value) {
        return function (
            RequestInterface $request,
            array $options
        ) use (
            $handler,
            $header,
            $value
) {
            $request = $request->withHeader($header, $value);
            return $handler($request, $options);
        };
    };
}
