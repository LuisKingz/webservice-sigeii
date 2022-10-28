<?php

namespace SisaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity
 */
class Profesor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProfesor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofesor;

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
     * @ORM\Column(name="puesto", type="string", length=50, nullable=true)
     */
    private $puesto = 'NULL';

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
     * Get idprofesor
     *
     * @return integer
     */
    public function getIdprofesor()
    {
        return $this->idprofesor;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Profesor
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
     * @return Profesor
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
     * @return Profesor
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
     * Set puesto
     *
     * @param string $puesto
     *
     * @return Profesor
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Profesor
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
     * @return Profesor
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
