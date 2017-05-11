<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class UserExtraDataModel
 * @package ContactuallyClient\Model\Nested
 */
class UserExtraDataModel
{
    /**
     * @var string
     */
    private $enterprise;

    /**
     * @var \DateTime
     */
    private $finishedTourAt;

    /**
     * @var string
     */
    private $inviteLink;

    /**
     * @var string
     */
    private $partner;

    /**
     * @var array
     */
    private $team;

    /**
     * @var integer
     */
    private $dailyBulkEmailLimit;

    /**
     * @var integer
     */
    private $dailyBulkEmailSent;

    /**
     * @var array
     */
    private $enabledFeatures;

    /**
     * @return string
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }

    /**
     * @param string $enterprise
     * @return UserExtraDataModel
     */
    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFinishedTourAt()
    {
        return $this->finishedTourAt;
    }

    /**
     * @param \DateTime $finishedTourAt
     * @return UserExtraDataModel
     */
    public function setFinishedTourAt($finishedTourAt)
    {
        $this->finishedTourAt = $finishedTourAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getInviteLink()
    {
        return $this->inviteLink;
    }

    /**
     * @param string $inviteLink
     * @return UserExtraDataModel
     */
    public function setInviteLink($inviteLink)
    {
        $this->inviteLink = $inviteLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @param string $partner
     * @return UserExtraDataModel
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return array
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param array $team
     * @return UserExtraDataModel
     */
    public function setTeam($team)
    {
        $this->team = $team;
        return $this;
    }

    /**
     * @return int
     */
    public function getDailyBulkEmailLimit()
    {
        return $this->dailyBulkEmailLimit;
    }

    /**
     * @param int $dailyBulkEmailLimit
     * @return UserExtraDataModel
     */
    public function setDailyBulkEmailLimit($dailyBulkEmailLimit)
    {
        $this->dailyBulkEmailLimit = $dailyBulkEmailLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getDailyBulkEmailSent()
    {
        return $this->dailyBulkEmailSent;
    }

    /**
     * @param int $dailyBulkEmailSent
     * @return UserExtraDataModel
     */
    public function setDailyBulkEmailSent($dailyBulkEmailSent)
    {
        $this->dailyBulkEmailSent = $dailyBulkEmailSent;
        return $this;
    }

    /**
     * @return array
     */
    public function getEnabledFeatures()
    {
        return $this->enabledFeatures;
    }

    /**
     * @param array $enabledFeatures
     * @return UserExtraDataModel
     */
    public function setEnabledFeatures($enabledFeatures)
    {
        $this->enabledFeatures = $enabledFeatures;
        return $this;
    }
}