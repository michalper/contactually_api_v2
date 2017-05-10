<?php

namespace ContactuallyClient\Model;

use ContactuallyClient\Model\Nested\AddressModel;
use ContactuallyClient\Model\Nested\EmailAddressModel;
use ContactuallyClient\Model\Nested\ExtraDataModel;
use ContactuallyClient\Model\Nested\PhoneNumberModel;
use ContactuallyClient\Model\Nested\SocialMediaProfileModel;
use ContactuallyClient\Model\Nested\WebsiteModel;

/**
 * Class ContactModel
 * @package ContactuallyClient\Model
 */
class ContactModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $avatarUrl;

    /**
     * @var array
     */
    private $tags;

    /**
     * @var string
     */
    private $assignedToId;

    /**
     * @var AddressModel[]
     */
    private $addresses;

    /**
     * @var EmailAddressModel[]
     */
    private $emailAddresses;

    /**
     * @var SocialMediaProfileModel[]
     */
    private $socialMediaProfiles;

    /**
     * @var WebsiteModel[]
     */
    private $websites;

    /**
     * @var \ContactuallyClient\Model\Nested\PhoneNumberModel[]
     */
    private $phoneNumbers;

    /**
     * @var array
     */
    private $customFields;

    /**
     * @var \ContactuallyClient\Model\Nested\ExtraDataModel
     */
    private $extraData;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContactModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return ContactModel
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return ContactModel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ContactModel
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ContactModel
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return ContactModel
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return ContactModel
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ContactModel
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     * @return ContactModel
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return ContactModel
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignedToId()
    {
        return $this->assignedToId;
    }

    /**
     * @param string $assignedToId
     * @return ContactModel
     */
    public function setAssignedToId($assignedToId)
    {
        $this->assignedToId = $assignedToId;
        return $this;
    }

    /**
     * @return AddressModel[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param AddressModel[] $addresses
     * @return ContactModel
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @param AddressModel $addressModel
     * @return ContactModel
     */
    public function addAddress(AddressModel $addressModel)
    {
        $this->addresses[] = $addressModel;
        return $this;
    }

    /**
     * @return EmailAddressModel[]
     */
    public function getEmailAddresses()
    {
        return $this->emailAddresses;
    }

    /**
     * @param EmailAddressModel[] $emailAddresses
     * @return ContactModel
     */
    public function setEmailAddresses($emailAddresses)
    {
        $this->emailAddresses = $emailAddresses;
        return $this;
    }

    /**
     * @param EmailAddressModel $emailAddressModel
     * @return ContactModel
     */
    public function addEmailAddress(EmailAddressModel $emailAddressModel)
    {
        $this->emailAddresses[] = $emailAddressModel;
        return $this;
    }

    /**
     * @return SocialMediaProfileModel[]
     */
    public function getSocialMediaProfiles()
    {
        return $this->socialMediaProfiles;
    }

    /**
     * @param SocialMediaProfileModel[] $socialMediaProfiles
     * @return ContactModel
     */
    public function setSocialMediaProfiles($socialMediaProfiles)
    {
        $this->socialMediaProfiles = $socialMediaProfiles;
        return $this;
    }

    /**
     * @param SocialMediaProfileModel $socialMediaProfileModel
     * @return ContactModel
     */
    public function addSocialMediaProfile(SocialMediaProfileModel $socialMediaProfileModel)
    {
        $this->socialMediaProfiles[] = $socialMediaProfileModel;
        return $this;
    }

    /**
     * @return WebsiteModel[]
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * @param WebsiteModel[] $websites
     * @return ContactModel
     */
    public function setWebsites($websites)
    {
        $this->websites = $websites;
        return $this;
    }

    /**
     * @param WebsiteModel $websiteModel
     * @return ContactModel
     */
    public function addWebsite(WebsiteModel $websiteModel)
    {
        $this->websites[] = $websiteModel;
        return $this;
    }

    /**
     * @return PhoneNumberModel[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @param PhoneNumberModel[] $phoneNumbers
     * @return ContactModel
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    /**
     * @param PhoneNumberModel $phoneNumberModel
     * @return ContactModel
     */
    public function addPhoneNumber(PhoneNumberModel $phoneNumberModel)
    {
        $this->phoneNumbers[] = $phoneNumberModel;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     * @return ContactModel
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
        return $this;
    }

    /**
     * @return ExtraDataModel
     */
    public function getExtraData()
    {
        return $this->extraData;
    }

    /**
     * @param ExtraDataModel $extraData
     * @return ContactModel
     */
    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;
        return $this;
    }
}