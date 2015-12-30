<?php

namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * SellersRequests
 *
 * @ORM\Table(name="sellers_requests", indexes={@ORM\Index(name="request_id_fk", columns={"request_id"})})
 * @ORM\Entity
 */
class SellerRequest
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
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="technical_report", type="text", nullable=true)
     */
    private $technicalReport;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=45, nullable=true)
     */
    private $unit;

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
     * @var \Request
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

    }

    public function getId()
    {
        return $this->id;
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
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

    public function setImage($image)
    {
        return $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setTechnicalReport($technicalReport)
    {
        return $this->technicalReport = $technicalReport;
    }

    public function getTechnicalReport()
    {
        return $this->technicalReport;
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
