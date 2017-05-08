<?php

namespace ContactuallyClient\Service;

use GuzzleHttp\Client;

/**
 * Class Service
 * @package AdbClient\Service
 */
class Service
{
    const REQUEST_METHOD_GET = 'GET';
    const REQUEST_METHOD_POST = 'POST';
    const REQUEST_METHOD_PUT = 'PUT';
    const REQUEST_METHOD_DELETE = 'DELETE';

    const URL = 'https://api.contactually.com/v2/';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var array
     */
    private $message = [];

    /**
     * @var string
     */
    private $requestMethod;

    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @return array
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param array $message
     * @return Service
     */
    public function setMessage(array $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return Service
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * @param string $requestMethod
     * @return Service
     */
    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    /**
     * @param string|bool $url
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function request($url = false)
    {
        if (!$url) {
            throw new \Exception('URL is missing.');
        }

        $request = $this->client->request(
            $this->requestMethod,
            self::URL . $url,
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->apiKey
                ],
                'json' => $this->message
            ]
        );

        return $request;
    }


}