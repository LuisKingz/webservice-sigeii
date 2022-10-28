<?php

namespace SisaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matricula = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=50, nullable=true)
     */
    private $apellidoPaterno = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=50, nullable=true)
     */
    private $apellidoMaterno = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="carrera", type="string", length=50, nullable=true)
     */
    private $carrera = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=50, nullable=true)
     */
    private $grupo = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="divisionAcademica", type="string", length=100, nullable=true)
     */
    private $divisionacademica = 'NULL';



    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Alumno
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     *
     * @return Alumno
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     *
     * @return Alumno
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     *
     * @return Alumno
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Alumno
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set divisionacademica
     *
     * @param string $divisionacademica
     *
     * @return Alumno
     */
    public function setDivisionacademica($divisionacademica)
    {
        $this->divisionacademica = $divisionacademica;

        return $this;
    }

    /**
     * Get divisionacademica
     *
     * @return string
     */
    public function getDivisionacademica()
    {
        return $this->divisionacademica;
    }
}
