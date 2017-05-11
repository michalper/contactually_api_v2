<?php

namespace ContactuallyClient\Service;

use ContactuallyClient\Model\UserModel;
use Itav\Component\Serializer\Serializer;
use Tools\Tools;

class UserService implements InterfaceService
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
     * ContactService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @see https://developers.contactually.com/docs/v2/#authorized-user-fetch-get
     * @return UserModel|false
     */
    public function fetch()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('me');


        $response = json_decode($ret->getBody()->getContents(), true);
        if (isset($response['data'])) {
            return $this->serializer->denormalize($response['data'], UserModel::class);
        }
        return false;
    }
}