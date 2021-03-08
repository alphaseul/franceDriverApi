<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VehicleDocRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=VehicleDocRepository::class)
 */
class VehicleDoc
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
    private $cardVehicle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insuranceUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $technicalInspectionUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCardVehicle(): ?string
    {
        return $this->cardVehicle;
    }

    public function setCardVehicle(string $cardVehicle): self
    {
        $this->cardVehicle = $cardVehicle;

        return $this;
    }

    public function getInsuranceUrl(): ?string
    {
        return $this->insuranceUrl;
    }

    public function setInsuranceUrl(?string $insuranceUrl): self
    {
        $this->insuranceUrl = $insuranceUrl;

        return $this;
    }

    public function getTechnicalInspectionUrl(): ?string
    {
        return $this->technicalInspectionUrl;
    }

    public function setTechnicalInspectionUrl(?string $technicalInspectionUrl): self
    {
        $this->technicalInspectionUrl = $technicalInspectionUrl;

        return $this;
    }
}
