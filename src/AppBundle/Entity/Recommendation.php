<?php

namespace AppBundle\Entity;

/**
 * Recommendation
 */
class Recommendation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $submitterName;

    /**
     * @var string
     */
    private $submitterEmail;

    /**
     * @var int
     */
    private $content;

    /**
     * @var bool
     */
    private $isApproved;

    /**
     * @var bool
     */
    private $isPending;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set submitterName
     *
     * @param string $submitterName
     *
     * @return Recommendation
     */
    public function setSubmitterName($submitterName)
    {
        $this->submitterName = $submitterName;

        return $this;
    }

    /**
     * Get submitterName
     *
     * @return string
     */
    public function getSubmitterName()
    {
        return $this->submitterName;
    }

    /**
     * Set submitterEmail
     *
     * @param string $submitterEmail
     *
     * @return Recommendation
     */
    public function setSubmitterEmail($submitterEmail)
    {
        $this->submitterEmail = $submitterEmail;

        return $this;
    }

    /**
     * Get submitterEmail
     *
     * @return string
     */
    public function getSubmitterEmail()
    {
        return $this->submitterEmail;
    }

    /**
     * Set content
     *
     * @param integer $content
     *
     * @return Recommendation
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return int
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set isApproved
     *
     * @param boolean $isApproved
     *
     * @return Recommendation
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    /**
     * Get isApproved
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * Set isPending
     *
     * @param boolean $isPending
     *
     * @return Recommendation
     */
    public function setIsPending($isPending)
    {
        $this->isPending = $isPending;

        return $this;
    }

    /**
     * Get isPending
     *
     * @return bool
     */
    public function getIsPending()
    {
        return $this->isPending;
    }
}

