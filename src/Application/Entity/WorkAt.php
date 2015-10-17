<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkAt
 *
 * @ORM\Table(name="work_at", indexes={@ORM\Index(name="user_id_idx", columns={"user"}), @ORM\Index(name="service_id_idx", columns={"service"})})
 * @ORM\Entity
 */
class WorkAt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="started_at", type="datetime", nullable=false)
     */
    private $startedAt;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service", referencedColumnName="id")
     * })
     */
    private $service;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startedAt
     *
     * @param \DateTime $startedAt
     * @return WorkAt
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * Get startedAt
     *
     * @return \DateTime 
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * Set service
     *
     * @param \Blog\Entity\Service $service
     * @return WorkAt
     */
    public function setService(\Blog\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Blog\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set user
     *
     * @param \Blog\Entity\User $user
     * @return WorkAt
     */
    public function setUser(\Blog\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Blog\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
