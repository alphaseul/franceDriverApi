<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DriverDocRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DriverDocRepository::class)
 */
class DriverDoc
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
    private $diverLicenceUrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vtcCardUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiverLicenceUrl(): ?string
    {
        return $this->diverLicenceUrl;
    }

    public function setDiverLicenceUrl(string $diverLicenceUrl): self
    {
        $this->diverLicenceUrl = $diverLicenceUrl;

        return $this;
    }

    public function getVtcCardUrl(): ?string
    {
        return $this->vtcCardUrl;
    }

    public function setVtcCardUrl(string $vtcCardUrl): self
    {
        $this->vtcCardUrl = $vtcCardUrl;

        return $this;
    }
}
