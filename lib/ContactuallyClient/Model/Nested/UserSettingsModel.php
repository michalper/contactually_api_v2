<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class UserSettingsModel
 * @package ContactuallyClient\Model\Nested
 */
class UserSettingsModel
{
    /**
     * @var string
     */
    private $contactuallyGoal;

    /**
     * @var string
     */
    private $defaultMessageAccountId;

    /**
     * @var string
     */
    private $defaultMessageSubject;

    /**
     * @var string
     */
    private $defaultMessageBcc;

    /**
     * @var integer
     */
    private $onboardingStep;

    /**
     * @var boolean
     */
    private $showEventsOnDash;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $npsPromptDue;

    /**
     * @var string
     */
    private $emailSignature;

    /**
     * @var string
     */
    private $timeZone;

    /**
     * @var string
     */
    private $industryId;

    /**
     * @return string
     */
    public function getContactuallyGoal()
    {
        return $this->contactuallyGoal;
    }

    /**
     * @param string $contactuallyGoal
     * @return UserSettingsModel
     */
    public function setContactuallyGoal($contactuallyGoal)
    {
        $this->contactuallyGoal = $contactuallyGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultMessageAccountId()
    {
        return $this->defaultMessageAccountId;
    }

    /**
     * @param string $defaultMessageAccountId
     * @return UserSettingsModel
     */
    public function setDefaultMessageAccountId($defaultMessageAccountId)
    {
        $this->defaultMessageAccountId = $defaultMessageAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultMessageSubject()
    {
        return $this->defaultMessageSubject;
    }

    /**
     * @param string $defaultMessageSubject
     * @return UserSettingsModel
     */
    public function setDefaultMessageSubject($defaultMessageSubject)
    {
        $this->defaultMessageSubject = $defaultMessageSubject;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultMessageBcc()
    {
        return $this->defaultMessageBcc;
    }

    /**
     * @param string $defaultMessageBcc
     * @return UserSettingsModel
     */
    public function setDefaultMessageBcc($defaultMessageBcc)
    {
        $this->defaultMessageBcc = $defaultMessageBcc;
        return $this;
    }

    /**
     * @return int
     */
    public function getOnboardingStep()
    {
        return $this->onboardingStep;
    }

    /**
     * @param int $onboardingStep
     * @return UserSettingsModel
     */
    public function setOnboardingStep($onboardingStep)
    {
        $this->onboardingStep = $onboardingStep;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowEventsOnDash()
    {
        return $this->showEventsOnDash;
    }

    /**
     * @param bool $showEventsOnDash
     * @return UserSettingsModel
     */
    public function setShowEventsOnDash($showEventsOnDash)
    {
        $this->showEventsOnDash = $showEventsOnDash;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return UserSettingsModel
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getNpsPromptDue()
    {
        return $this->npsPromptDue;
    }

    /**
     * @param string $npsPromptDue
     * @return UserSettingsModel
     */
    public function setNpsPromptDue($npsPromptDue)
    {
        $this->npsPromptDue = $npsPromptDue;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailSignature()
    {
        return $this->emailSignature;
    }

    /**
     * @param string $emailSignature
     * @return UserSettingsModel
     */
    public function setEmailSignature($emailSignature)
    {
        $this->emailSignature = $emailSignature;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return UserSettingsModel
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndustryId()
    {
        return $this->industryId;
    }

    /**
     * @param string $industryId
     * @return UserSettingsModel
     */
    public function setIndustryId($industryId)
    {
        $this->industryId = $industryId;
        return $this;
    }
}