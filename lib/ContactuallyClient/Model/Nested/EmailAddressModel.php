<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class EmailAddressModel
 * @package ContactuallyClient\Model\Nested
 */
class EmailAddressModel
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
     * @return EmailAddressModel
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
     * @return EmailAddressModel
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
     * @return EmailAddressModel
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}