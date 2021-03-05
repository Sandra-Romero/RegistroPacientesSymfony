<?php

namespace App\Entity;

use App\Repository\ConsultaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConsultaRepository::class)
 */
class Consulta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $motivo;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $sintomas;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $diagnostico;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(string $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getSintomas(): ?string
    {
        return $this->sintomas;
    }

    public function setSintomas(string $sintomas): self
    {
        $this->sintomas = $sintomas;

        return $this;
    }

    public function getDiagnostico(): ?string
    {
        return $this->diagnostico;
    }

    public function setDiagnostico(string $diagnostico): self
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }
}
