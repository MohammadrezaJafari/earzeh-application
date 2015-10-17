<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticketing
 *
 * @ORM\Table(name="ticketing", indexes={@ORM\Index(name="user_id_idx", columns={"user"}), @ORM\Index(name="service_idx", columns={"service"}), @ORM\Index(name="assign_to_user_id_idx", columns={"assign_to"})})
 * @ORM\Entity
 */
class Ticketing
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", length=45, nullable=true)
     */
    private $priority;

    /**
     * @var boolean
     *
     * @ORM\Column(name="closed", type="boolean", nullable=false)
     */
    private $closed;

    /**
     * @var string
     *
     * @ORM\Column(name="messages", type="text", nullable=true)
     */
    private $messages;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assign_to", referencedColumnName="id")
     * })
     */
    private $assignTo;

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
     * Set title
     *
     * @param string $title
     * @return Ticketing
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set priority
     *
     * @param string $priority
     * @return Ticketing
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set closed
     *
     * @param boolean $closed
     * @return Ticketing
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set messages
     *
     * @param string $messages
     * @return Ticketing
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get messages
     *
     * @return string 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Ticketing
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Ticketing
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Ticketing
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set assignTo
     *
     * @param \Blog\Entity\User $assignTo
     * @return Ticketing
     */
    public function setAssignTo(\Blog\Entity\User $assignTo = null)
    {
        $this->assignTo = $assignTo;

        return $this;
    }

    /**
     * Get assignTo
     *
     * @return \Blog\Entity\User 
     */
    public function getAssignTo()
    {
        return $this->assignTo;
    }

    /**
     * Set service
     *
     * @param \Blog\Entity\Service $service
     * @return Ticketing
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
     * @return Ticketing
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
