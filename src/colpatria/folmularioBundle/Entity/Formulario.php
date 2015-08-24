<?php

namespace colpatria\folmularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="colpatria\folmularioBundle\Entity\FormularioRepository")
 */
class Formulario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nit", type="integer")
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_nombre", type="string", length=255)
     */
    private $primerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=255)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_nombre", type="string", length=255)
     */
    private $segundoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_apellido", type="string", length=255)
     */
    private $segundoApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_fijo", type="string", length=255)
     */
    private $telefonoFijo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_celular", type="string", length=20)
     */
    private $telefonoCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=255)
     */
    private $razonSocial;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamento", type="integer")
     */
    private $departamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="ciudad", type="integer")
     */
    private $ciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="cedula", type="integer")
     */
    private $cedula;
    /**
     * @var string
     *
     * @ORM\Column(name="direccion_empresa", type="string", length=255)
     */
    private $direccionEmpresa;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nit
     *
     * @param integer $nit
     * @return Formulario
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return integer 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set primerNombre
     *
     * @param string $primerNombre
     * @return Formulario
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get primerNombre
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return Formulario
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoNombre
     *
     * @param string $segundoNombre
     * @return Formulario
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    /**
     * Get segundoNombre
     *
     * @return string 
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     * @return Formulario
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set telefonoFijo
     *
     * @param string $telefonoFijo
     * @return Formulario
     */
    public function setTelefonoFijo($telefonoFijo)
    {
        $this->telefonoFijo = $telefonoFijo;

        return $this;
    }

    /**
     * Get telefonoFijo
     *
     * @return string 
     */
    public function getTelefonoFijo()
    {
        return $this->telefonoFijo;
    }

    /**
     * Set telefonoCelular
     *
     * @param string $telefonoCelular
     * @return Formulario
     */
    public function setTelefonoCelular($telefonoCelular)
    {
        $this->telefonoCelular = $telefonoCelular;

        return $this;
    }

    /**
     * Get telefonoCelular
     *
     * @return string 
     */
    public function getTelefonoCelular()
    {
        return $this->telefonoCelular;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return Formulario
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set departamento
     *
     * @param integer $departamento
     * @return Formulario
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return integer 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set ciudad
     *
     * @param integer $ciudad
     * @return Formulario
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return integer 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set cedula
     *
     * @param integer $cedula
     * @return Formulario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

     /**
     * Get direccionEmpresa
     *
     * @return string 
     */
    public function getDireccionEmpresa()
    {
        return $this->direccionEmpresa;
    }

    /**
     * Set direccionEmpresa
     *
     * @param string $direccionEmpresa
     * @return Formulario
     */
    public function setDireccionEmpresa($direccionEmpresa)
    {
        $this->direccionEmpresa = $direccionEmpresa;

        return $this;
    }
}
