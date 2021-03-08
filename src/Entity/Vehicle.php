<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=VehicleRepository::class)
 */
class Vehicle
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
    private $vehicleNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modelYear;

    /**
     * @ORM\OneToOne(targetEntity=VehicleDoc::class, cascade={"persist", "remove"})
     */
    private $vehicleDoc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicleNumber(): ?string
    {
        return $this->vehicleNumber;
    }

    public function setVehicleNumber(string $vehicleNumber): self
    {
        $this->vehicleNumber = $vehicleNumber;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getModelYear(): ?string
    {
        return $this->modelYear;
    }

    public function setModelYear(?string $modelYear): self
    {
        $this->modelYear = $modelYear;

        return $this;
    }

    public function getVehicleDoc(): ?VehicleDoc
    {
        return $this->vehicleDoc;
    }

    public function setVehicleDoc(?VehicleDoc $vehicleDoc): self
    {
        $this->vehicleDoc = $vehicleDoc;

        return $this;
    }
}
