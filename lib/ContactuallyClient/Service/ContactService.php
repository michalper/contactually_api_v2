<?php

namespace ContactuallyClient\Service;

use ContactuallyClient\Model\ContactModel;
use ContactuallyClient\Model\SearchModel;
use Itav\Component\Serializer\Serializer;
use Tools\Tools;

/**
 * Class ContactService
 * @package ContactuallyClient\Service
 */
class ContactService implements InterfaceService
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
     * @see https://developers.contactually.com/docs/v2/#contacts-list-get
     * @param SearchModel $searchModel
     * @return array|ContactModel[]
     */
    public function search(SearchModel $searchModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams($this->serializer->normalize($searchModel)['search'])
            ->request('contacts');

        $response = json_decode($ret->getBody()->getContents(), true);

        if (isset($response['data'])) {
            return $this->serializer->denormalize($response['data'], ContactModel::class . '[]');
        }
        return [];
    }

    /**
     * @see https://developers.contactually.com/docs/v2/#contacts-create-post
     * @param ContactModel $contactModel
     * @return ContactModel|false
     */
    public function create(ContactModel $contactModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData(['data' => $this->serializer->normalize($contactModel)])
            ->request('contacts');

        $response = json_decode($ret->getBody()->getContents(), true);
        if (isset($response['data'])) {
            return $this->serializer->denormalize($response['data'], ContactModel::class);
        }
        return false;
    }

    /**
     * @see https://developers.contactually.com/docs/v2/#contacts-update-patch
     * @param ContactModel $contactModel
     * @return bool|ContactModel
     * @throws \Exception
     */
    public function update(ContactModel $contactModel)
    {
        if (!$contactModel->getId()) {
            throw new \Exception('Contact ID missing.');
        }

        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_PATCH)
            ->setPostData(['data' => $this->serializer->normalize($contactModel)])
            ->request('contacts/' . $contactModel->getId());

        $response = json_decode($ret->getBody()->getContents(), true);
        if (isset($response['data'])) {
            return $this->serializer->denormalize($response['data'], ContactModel::class);
        }
        return false;
    }

    /**
     * @see https://developers.contactually.com/docs/v2/#contacts-delete-delete
     * @param ContactModel $contactModel
     * @return bool
     * @throws \Exception
     */
    public function delete(ContactModel $contactModel)
    {
        if (!$contactModel->getId()) {
            throw new \Exception('Contact ID missing.');
        }

        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_DELETE)
            ->request('contacts/' . $contactModel->getId());

        $response = json_decode($ret->getBody()->getContents(), true);
        if (isset($response['data'])) {
            return true;
        }
        return false;
    }
}