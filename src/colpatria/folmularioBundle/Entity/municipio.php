<?php

namespace colpatria\folmularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * municipio
 */
class municipio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMunicipio;

    /**
     * @var integer
     */
    private $departamentoIddepartamento;


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
     * Set nombreMunicipio
     *
     * @param string $nombreMunicipio
     * @return municipio
     */
    public function setNombreMunicipio($nombreMunicipio)
    {
        $this->nombreMunicipio = $nombreMunicipio;

        return $this;
    }

    /**
     * Get nombreMunicipio
     *
     * @return string 
     */
    public function getNombreMunicipio()
    {
        return $this->nombreMunicipio;
    }

    /**
     * Set departamentoIddepartamento
     *
     * @param integer $departamentoIddepartamento
     * @return municipio
     */
    public function setDepartamentoIddepartamento($departamentoIddepartamento)
    {
        $this->departamentoIddepartamento = $departamentoIddepartamento;

        return $this;
    }

    /**
     * Get departamentoIddepartamento
     *
     * @return integer 
     */
    public function getDepartamentoIddepartamento()
    {
        return $this->departamentoIddepartamento;
    }
}
