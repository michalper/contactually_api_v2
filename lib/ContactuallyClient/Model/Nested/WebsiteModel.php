<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class WebsiteModel
 * @package ContactuallyClient\Model\Nested
 */
class WebsiteModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $address;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return WebsiteModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return WebsiteModel
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return WebsiteModel
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

}