<?php

namespace ContactuallyClient;

use ContactuallyClient\Service\ContactService;
use ContactuallyClient\Service\Service;
use Itav\Component\Serializer\Serializer;

/**
 * Class AdbClient
 * @package AdbClient
 */
class ContactuallyClient
{

    /**
     * @var Service
     */
    private $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * ContactuallyClient constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
        $this->serializer = new Serializer();
        $this->contact = new ContactService($this->service, $this->serializer);
    }

    /**
     * @param string $apiKey
     * @return ContactuallyClient
     */
    public function setApiKey($apiKey)
    {
        $this->service->setApiKey($apiKey);
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->service->getApiKey();
    }
}