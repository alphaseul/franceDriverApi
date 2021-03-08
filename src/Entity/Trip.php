<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TripRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TripRepository::class)
 */
class Trip
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fromLocation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $toLocation;

    /**
     * @ORM\Column(type="time")
     */
    private $pickupTime;

    /**
     * @ORM\Column(type="date")
     */
    private $tripDate;

    /**
     * @ORM\Column(type="bigint")
     */
    private $amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\OneToOne(targetEntity=Driver::class, cascade={"persist", "remove"})
     */
    private $driver;

    /**
     * @ORM\OneToOne(targetEntity=Customer::class, cascade={"persist", "remove"})
     */
    private $customer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromLocation(): ?string
    {
        return $this->fromLocation;
    }

    public function setFromLocation(string $fromLocation): self
    {
        $this->fromLocation = $fromLocation;

        return $this;
    }

    public function getToLocation(): ?string
    {
        return $this->toLocation;
    }

    public function setToLocation(string $toLocation): self
    {
        $this->toLocation = $toLocation;

        return $this;
    }

    public function getPickupTime(): ?\DateTimeInterface
    {
        return $this->pickupTime;
    }

    public function setPickupTime(\DateTimeInterface $pickupTime): self
    {
        $this->pickupTime = $pickupTime;

        return $this;
    }

    public function getTripDate(): ?\DateTimeInterface
    {
        return $this->tripDate;
    }

    public function setTripDate(\DateTimeInterface $tripDate): self
    {
        $this->tripDate = $tripDate;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDriver(): ?Driver
    {
        return $this->driver;
    }

    public function setDriver(?Driver $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }
}
