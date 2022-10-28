<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Academia
 *
 * @ORM\Table(name="Academia", indexes={@ORM\Index(name="id_inmueble", columns={"id_inmueble"}), @ORM\Index(name="responsableAcademia", columns={"responsableAcademia"})})
 * @ORM\Entity
 */
class Academia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAcademia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idacademia;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreAcademia", type="string", length=45, nullable=false)
     */
    private $nombreacademia;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoAcademia", type="string", length=10, nullable=true)
     */
    private $estadoacademia = '\'Activo\'';

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
     *   @ORM\JoinColumn(name="responsableAcademia", referencedColumnName="idUsuario")
     * })
     */
    private $responsableacademia;



    /**
     * Get idacademia
     *
     * @return integer
     */
    public function getIdacademia()
    {
        return $this->idacademia;
    }

    /**
     * Set nombreacademia
     *
     * @param string $nombreacademia
     *
     * @return Academia
     */
    public function setNombreacademia($nombreacademia)
    {
        $this->nombreacademia = $nombreacademia;

        return $this;
    }

    /**
     * Get nombreacademia
     *
     * @return string
     */
    public function getNombreacademia()
    {
        return $this->nombreacademia;
    }

    /**
     * Set estadoacademia
     *
     * @param string $estadoacademia
     *
     * @return Academia
     */
    public function setEstadoacademia($estadoacademia)
    {
        $this->estadoacademia = $estadoacademia;

        return $this;
    }

    /**
     * Get estadoacademia
     *
     * @return string
     */
    public function getEstadoacademia()
    {
        return $this->estadoacademia;
    }

    /**
     * Set idInmueble
     *
     * @param \AppBundle\Entity\Inmueble $idInmueble
     *
     * @return Academia
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
     * Set responsableacademia
     *
     * @param \AppBundle\Entity\Usuario $responsableacademia
     *
     * @return Academia
     */
    public function setResponsableacademia(\AppBundle\Entity\Usuario $responsableacademia = null)
    {
        $this->responsableacademia = $responsableacademia;

        return $this;
    }

    /**
     * Get responsableacademia
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getResponsableacademia()
    {
        return $this->responsableacademia;
    }
}
