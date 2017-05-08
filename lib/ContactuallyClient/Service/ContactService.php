<?php

namespace ContactuallyClient\Service;

use ContactuallyClient\Model\ContactModel;
use Itav\Component\Serializer\Serializer;

/**
 * Class ContactService
 * @package ContactuallyClient\Service
 */
class ContactService
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
     * @return ContactModel[]|array
     */
    public function search()
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('contacts');

        $response = json_decode($ret->getBody()->getContents(), true);

        if (isset($response['data'])) {
            return $this->serializer->denormalize($response['data'], ContactModel::class . '[]');
        }
        return [];
    }

    /**
     * @param ContactModel $contactModel
     * @return ContactModel|false
     */
    public function create(ContactModel $contactModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setMessage(['data' => $this->serializer->normalize($contactModel)])
            ->request('contacts');

        $response = json_decode($ret->getBody()->getContents(), true);
        if (isset($response['data'])) {
            return $this->serializer->denormalize($response['data'], ContactModel::class);
        }
        return false;
    }
}