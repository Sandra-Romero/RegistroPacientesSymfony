<?php

namespace App\Entity;

use App\Repository\PacienteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PacienteRepository::class)
 */
class Paciente
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
    private $nombre_paciente;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $direccion;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_nac;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telefono;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrePaciente(): ?string
    {
        return $this->nombre_paciente;
    }

    public function setNombrePaciente(string $nombre_paciente): self
    {
        $this->nombre_paciente = $nombre_paciente;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getFechaNac(): ?\DateTimeInterface
    {
        return $this->fecha_nac;
    }

    public function setFechaNac(\DateTimeInterface $fecha_nac): self
    {
        $this->fecha_nac = $fecha_nac;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }
}
