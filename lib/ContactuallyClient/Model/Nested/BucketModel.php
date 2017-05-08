<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class BucketModel
 * @package ContactuallyClient\Model\Nested
 */
class BucketModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $reminderInterval;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BucketModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return BucketModel
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getReminderInterval()
    {
        return $this->reminderInterval;
    }

    /**
     * @param int $reminderInterval
     * @return BucketModel
     */
    public function setReminderInterval($reminderInterval)
    {
        $this->reminderInterval = $reminderInterval;
        return $this;
    }
}