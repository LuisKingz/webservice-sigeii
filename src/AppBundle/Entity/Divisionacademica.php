<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Divisionacademica
 *
 * @ORM\Table(name="DivisionAcademica", indexes={@ORM\Index(name="id_inmueble", columns={"id_inmueble"}), @ORM\Index(name="responsableDivision", columns={"responsableDivision"})})
 * @ORM\Entity
 */
class Divisionacademica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDivision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddivision;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreDivision", type="string", length=100, nullable=false)
     */
    private $nombredivision;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoDivision", type="string", length=10, nullable=true)
     */
    private $estadodivision = '\'Activo\'';

    /**
     * @var \Inmueble
     *
     * @ORM\ManyToOne(targetEntity="Inmueble")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inmueble", referencedColumnName="idInmueble")
     * })
     */
    private $idInmueble;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsableDivision", referencedColumnName="idUsuario")
     * })
     */
    private $responsabledivision;



    /**
     * Get iddivision
     *
     * @return integer
     */
    public function getIddivision()
    {
        return $this->iddivision;
    }

    /**
     * Set nombredivision
     *
     * @param string $nombredivision
     *
     * @return Divisionacademica
     */
    public function setNombredivision($nombredivision)
    {
        $this->nombredivision = $nombredivision;

        return $this;
    }

    /**
     * Get nombredivision
     *
     * @return string
     */
    public function getNombredivision()
    {
        return $this->nombredivision;
    }

    /**
     * Set estadodivision
     *
     * @param string $estadodivision
     *
     * @return Divisionacademica
     */
    public function setEstadodivision($estadodivision)
    {
        $this->estadodivision = $estadodivision;

        return $this;
    }

    /**
     * Get estadodivision
     *
     * @return string
     */
    public function getEstadodivision()
    {
        return $this->estadodivision;
    }

    /**
     * Set idInmueble
     *
     * @param \AppBundle\Entity\Inmueble $idInmueble
     *
     * @return Divisionacademica
     */
    public function setIdInmueble(\AppBundle\Entity\Inmueble $idInmueble = null)
    {
        $this->idInmueble = $idInmueble;

        return $this;
    }

    /**
     * Get idInmueble
     *
     * @return \AppBundle\Entity\Inmueble
     */
    public function getIdInmueble()
    {
        return $this->idInmueble;
    }

    /**
     * Set responsabledivision
     *
     * @param \AppBundle\Entity\Usuario $responsabledivision
     *
     * @return Divisionacademica
     */
    public function setResponsabledivision(\AppBundle\Entity\Usuario $responsabledivision = null)
    {
        $this->responsabledivision = $responsabledivision;

        return $this;
    }

    /**
     * Get responsabledivision
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getResponsabledivision()
    {
        return $this->responsabledivision;
    }
}
