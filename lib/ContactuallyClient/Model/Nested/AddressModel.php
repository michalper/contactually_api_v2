<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class AddressModel
 * @package ContactuallyClient\Model\Nested
 */
class AddressModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $fullAddress;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $street_1;

    /**
     * @var string
     */
    private $street_2;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $country;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return AddressModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * @param string $fullAddress
     * @return AddressModel
     */
    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;
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
     * @return AddressModel
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street_1;
    }

    /**
     * @param string $street_1
     * @return AddressModel
     */
    public function setStreet1($street_1)
    {
        $this->street_1 = $street_1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street_2;
    }

    /**
     * @param string $street_2
     * @return AddressModel
     */
    public function setStreet2($street_2)
    {
        $this->street_2 = $street_2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return AddressModel
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return AddressModel
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return AddressModel
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return AddressModel
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}