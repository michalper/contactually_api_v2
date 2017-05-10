<?php

namespace ContactuallyClient\Service;

use GuzzleHttp\Client;
use Tools\Tools;

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
    const REQUEST_METHOD_PATCH = 'PATCH';

    const URL = 'https://api.contactually.com/v2/';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var array
     */
    private $postData = [];

    /**
     * @var array
     */
    private $getParams = [];

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
    public function getPostData()
    {
        return $this->postData;
    }

    /**
     * @param array $postData
     * @return Service
     */
    public function setPostData(array $postData)
    {
        $this->postData = $postData;
        return $this;
    }

    /**
     * @return array
     */
    public function getGetParams()
    {
        return $this->getParams;
    }

    /**
     * @param array $getParams
     * @return Service
     */
    public function setGetParams($getParams)
    {
        $this->getParams = $getParams;
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
        $params = '';
        if ($this->getParams) {
            $params = '?' . http_build_query($this->getParams);
        }

        if (!$url) {
            throw new \Exception('URL is missing.');
        }

        $request = $this->client->request(
            $this->requestMethod,
            self::URL . $url . $params,
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->apiKey
                ],
                'json' => $this->postData
            ]
        );

        return $request;
    }


}