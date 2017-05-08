<?php

namespace ContactuallyClient\Model\Nested;

/**
 * Class ExtraDataModel
 * @package ContactuallyClient\Model\Nested
 */
class ExtraDataModel
{
    /**
     * @var string
     */
    private $lastContacted;

    /**
     * @var \DateTime
     */
    private $mutedAt;

    /**
     * @var string
     */
    private $relationshipStatus;

    /**
     * @var \DateTime
     */
    private $teamLastContactedAt;

    /**
     * @var string
     */
    private $teamLastContactedById;

    /**
     * @var \DateTime
     */
    private $lastBucketedAt;

    /**
     * @var \DateTime
     */
    private $userLastContactedAt;

    /**
     * @var BucketModel[]
     */
    private $buckets;

    /**
     * @var array
     */
    private $sources;

    /**
     * @var BucketModel
     */
    private $followupSource;

    /**
     * @var array
     */
    private $leadPools;

    /**
     * @var string
     */
    private $teamLastContactedBy;

    /**
     * @var AssociatedModel[]
     */
    private $associatedTags;

    /**
     * @var AssociatedModel
     */
    private $associatedCompany;

    /**
     * @var AssociatedModel
     */
    private $associatedLocation;

    /**
     * @var string
     */
    private $assignedTo;

    /**
     * @return string
     */
    public function getLastContacted()
    {
        return $this->lastContacted;
    }

    /**
     * @param string $lastContacted
     * @return ExtraDataModel
     */
    public function setLastContacted($lastContacted)
    {
        $this->lastContacted = $lastContacted;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMutedAt()
    {
        return $this->mutedAt;
    }

    /**
     * @param \DateTime $mutedAt
     * @return ExtraDataModel
     */
    public function setMutedAt($mutedAt)
    {
        $this->mutedAt = $mutedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    /**
     * @param string $relationshipStatus
     * @return ExtraDataModel
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTeamLastContactedAt()
    {
        return $this->teamLastContactedAt;
    }

    /**
     * @param \DateTime $teamLastContactedAt
     * @return ExtraDataModel
     */
    public function setTeamLastContactedAt($teamLastContactedAt)
    {
        $this->teamLastContactedAt = $teamLastContactedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamLastContactedById()
    {
        return $this->teamLastContactedById;
    }

    /**
     * @param string $teamLastContactedById
     * @return ExtraDataModel
     */
    public function setTeamLastContactedById($teamLastContactedById)
    {
        $this->teamLastContactedById = $teamLastContactedById;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBucketedAt()
    {
        return $this->lastBucketedAt;
    }

    /**
     * @param \DateTime $lastBucketedAt
     * @return ExtraDataModel
     */
    public function setLastBucketedAt($lastBucketedAt)
    {
        $this->lastBucketedAt = $lastBucketedAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUserLastContactedAt()
    {
        return $this->userLastContactedAt;
    }

    /**
     * @param \DateTime $userLastContactedAt
     * @return ExtraDataModel
     */
    public function setUserLastContactedAt($userLastContactedAt)
    {
        $this->userLastContactedAt = $userLastContactedAt;
        return $this;
    }

    /**
     * @return BucketModel[]
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * @param BucketModel[] $buckets
     * @return ExtraDataModel
     */
    public function setBuckets($buckets)
    {
        $this->buckets = $buckets;
        return $this;
    }

    /**
     * @return array
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param array $sources
     * @return ExtraDataModel
     */
    public function setSources($sources)
    {
        $this->sources = $sources;
        return $this;
    }

    /**
     * @return array
     */
    public function getFollowupSource()
    {
        return $this->followupSource;
    }

    /**
     * @param array $followupSource
     * @return ExtraDataModel
     */
    public function setFollowupSource($followupSource)
    {
        $this->followupSource = $followupSource;
        return $this;
    }

    /**
     * @return array
     */
    public function getLeadPools()
    {
        return $this->leadPools;
    }

    /**
     * @param array $leadPools
     * @return ExtraDataModel
     */
    public function setLeadPools($leadPools)
    {
        $this->leadPools = $leadPools;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamLastContactedBy()
    {
        return $this->teamLastContactedBy;
    }

    /**
     * @param string $teamLastContactedBy
     * @return ExtraDataModel
     */
    public function setTeamLastContactedBy($teamLastContactedBy)
    {
        $this->teamLastContactedBy = $teamLastContactedBy;
        return $this;
    }

    /**
     * @return AssociatedModel[]
     */
    public function getAssociatedTags()
    {
        return $this->associatedTags;
    }

    /**
     * @param AssociatedModel[] $associatedTags
     * @return ExtraDataModel
     */
    public function setAssociatedTags($associatedTags)
    {
        $this->associatedTags = $associatedTags;
        return $this;
    }

    /**
     * @return AssociatedModel
     */
    public function getAssociatedCompany()
    {
        return $this->associatedCompany;
    }

    /**
     * @param AssociatedModel $associatedCompany
     * @return ExtraDataModel
     */
    public function setAssociatedCompany($associatedCompany)
    {
        $this->associatedCompany = $associatedCompany;
        return $this;
    }

    /**
     * @return AssociatedModel
     */
    public function getAssociatedLocation()
    {
        return $this->associatedLocation;
    }

    /**
     * @param AssociatedModel $associatedLocation
     * @return ExtraDataModel
     */
    public function setAssociatedLocation($associatedLocation)
    {
        $this->associatedLocation = $associatedLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->assignedTo;
    }

    /**
     * @param string $assignedTo
     * @return ExtraDataModel
     */
    public function setAssignedTo($assignedTo)
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }
}