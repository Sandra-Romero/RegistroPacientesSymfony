<?php

namespace App\Entity;

use App\Repository\RecetaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecetaRepository::class)
 */
class Receta
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
    private $nombre_receta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dosis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreReceta(): ?string
    {
        return $this->nombre_receta;
    }

    public function setNombreReceta(string $nombre_receta): self
    {
        $this->nombre_receta = $nombre_receta;

        return $this;
    }

    public function getDosis(): ?string
    {
        return $this->dosis;
    }

    public function setDosis(string $dosis): self
    {
        $this->dosis = $dosis;

        return $this;
    }
}
