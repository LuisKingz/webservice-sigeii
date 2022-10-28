<?php

namespace SisaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50, nullable=true)
     */
    private $usuario = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=true)
     */
    private $pass = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="claveIdentidad", type="string", length=50, nullable=true)
     */
    private $claveidentidad = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoUsuario", type="string", length=50, nullable=true)
     */
    private $tipousuario = 'NULL';



    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set claveidentidad
     *
     * @param string $claveidentidad
     *
     * @return Usuario
     */
    public function setClaveidentidad($claveidentidad)
    {
        $this->claveidentidad = $claveidentidad;

        return $this;
    }

    /**
     * Get claveidentidad
     *
     * @return string
     */
    public function getClaveidentidad()
    {
        return $this->claveidentidad;
    }

    /**
     * Set tipousuario
     *
     * @param string $tipousuario
     *
     * @return Usuario
     */
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;

        return $this;
    }

    /**
     * Get tipousuario
     *
     * @return string
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }
}
