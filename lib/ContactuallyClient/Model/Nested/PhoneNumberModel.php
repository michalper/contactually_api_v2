<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class PhoneNumberModel
 * @package ContactuallyClient\Model\Nested
 */
class PhoneNumberModel
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
    private $number;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PhoneNumberModel
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
     * @return PhoneNumberModel
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return PhoneNumberModel
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}