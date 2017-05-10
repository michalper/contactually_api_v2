<?php

namespace ContactuallyClient\Model;

class SearchModel
{
    const VAR_CREATED_AT = 'created_at';
    const VAR_UPDATED_AT = 'updated_at';
    const VAR_PAGE = 'page';
    const VAR_TEAM_PAGE = 'team_search';
    const VAR_COMPANY = 'company';
    const VAR_TAGS = 'tags';
    const VAR_BUCKETS = 'buckets';
    const VAR_Q = 'q';
    const VAR_ORDER = 'order';

    const PARAM_AFTER = 'after';
    const PARAM_BEFORE = 'before';

    /**
     * @var array
     */
    private $search = [];

    /**
     * @param string $type
     * @param \DateTime $dateTime
     * @return SearchModel
     * @throws \Exception
     */
    public function createdAt($type, \DateTime $dateTime)
    {
        if (!in_array($type, [self::PARAM_AFTER, self::PARAM_BEFORE]))
            throw new \Exception('Wrong param type.');

        $this->search[self::VAR_CREATED_AT . '.' . $type] = $dateTime->format('Y-m-d\TH:i:s');
        return $this;
    }

    /**
     * @param string $type
     * @param \DateTime $dateTime
     * @return SearchModel
     * @throws \Exception
     */
    public function updatedAt($type, \DateTime $dateTime)
    {
        if (!in_array($type, [self::PARAM_AFTER, self::PARAM_BEFORE]))
            throw new \Exception('Wrong param type.');

        $this->search[self::VAR_UPDATED_AT . '.' . $type] = $dateTime->format('Y-m-d\TH:i:s');
        return $this;
    }

    /**
     * @param integer $page
     * @return SearchModel
     */
    public function page($page)
    {
        $this->search[self::VAR_PAGE] = $page;
        return $this;
    }

    /**
     * @param string $teamSearch
     * @return SearchModel
     */
    public function teamSearch($teamSearch)
    {
        $this->search[self::VAR_TEAM_PAGE] = $teamSearch;
        return $this;
    }

    /**
     * @param string $company
     * @return SearchModel
     */
    public function company($company)
    {
        $this->search[self::VAR_COMPANY] = $company;
        return $this;
    }

    /**
     * @param string $tags
     * @return SearchModel
     */
    public function tags($tags)
    {
        $this->search[self::VAR_TAGS] = $tags;
        return $this;
    }

    /**
     * @param string $buckets
     * @return SearchModel
     */
    public function buckets($buckets)
    {
        $this->search[self::VAR_BUCKETS] = $buckets;
        return $this;
    }

    /**
     * @param string $q
     * @return SearchModel
     */
    public function q($q)
    {
        $this->search[self::VAR_Q] = $q;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return SearchModel
     */
    public function customField($key, $value)
    {
        $this->search[$key] = $value;
        return $this;
    }

    /**
     * @param string $order
     * @return SearchModel
     */
    public function order($order)
    {
        $this->search[self::VAR_ORDER] = $order;
        return $this;
    }
}