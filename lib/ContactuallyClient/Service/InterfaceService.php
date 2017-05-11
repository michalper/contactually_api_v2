<?php

namespace ContactuallyClient\Service;

use Itav\Component\Serializer\Serializer;

/**
 * Interface InterfaceService
 * @package ContactuallyClient\Service
 */
interface InterfaceService
{
    /**
     * InterfaceService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer);
}