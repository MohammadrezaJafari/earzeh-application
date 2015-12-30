<?php

namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * BuyersRequests
 *
 * @ORM\Table(name="buyers_requests", indexes={@ORM\Index(name="requests_id_fk", columns={"request_id"})})
 * @ORM\Entity
 */
class BuyerRequest
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
     * @ORM\Column(name="allow_i", type="text", nullable=true)
     */
    private $allowI;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit", type="integer", nullable=true)
     */
    private $unit;

    /**
     * @var integer
     *
     * @ORM\Column(name="proposed_price", type="integer", nullable=true)
     */
    private $proposedPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="datetime", nullable=true)
     */
    private $expireDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deadline", type="datetime", nullable=true)
     */
    private $deadline;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \Requests
     *
     * @ORM\ManyToOne(targetEntity="Request")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="request_id", referencedColumnName="id")
     * })
     */
    private $request;

    public function __construct()
    {
        $this->createdAt = (new \DateTime(date("Y-m-d H:i:s")));
//        $this->service = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function getId()
    {
        return $this->id;
    }

    public function setAllowI($allowI)
    {
        return $this->allowI = $allowI;
    }

    public function getAllowI()
    {
        return $this->allowI;
    }

    public function setNumber($number)
    {
        return $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setUnit($unit)
    {
        return $this->unit = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setProposedPrice($proposedPrice)
    {
        return $this->proposedPrice = $proposedPrice;
    }

    public function getProposedPrice()
    {
        return $this->proposedPrice;
    }

    public function setExpireDate($expireDate)
    {
        return $this->expireDate = $expireDate;
    }

    public function getExpireDate()
    {
        return $this->expireDate;
    }

    public function setDeadline($deadline)
    {
        return $this->deadline = $deadline;
    }

    public function getDeadline()
    {
        return $this->deadline;
    }


    /**
     * Set user
     *
     * @param \Application\Entity\Request $request
     * @return BuyerRequest
     */
    public function setRequest(\Application\Entity\Request $request = null)
    {
        $this->request = $request;

        return $this;
    }

}
