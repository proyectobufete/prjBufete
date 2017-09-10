<?php

namespace AppBundle\Entity;

/**
 * Departamentos
 */
class Departamentos
{
    /**
     * @var integer
     */
    private $idDepartamento;

    /**
     * @var string
     */
    private $departamento;

    /**
     * @var \AppBundle\Entity\Paises
     */
    private $idPais;


    /**
     * Get idDepartamento
     *
     * @return integer
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     *
     * @return Departamentos
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set idPais
     *
     * @param \AppBundle\Entity\Paises $idPais
     *
     * @return Departamentos
     */
    public function setIdPais(\AppBundle\Entity\Paises $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }


    public function __toString()
  {
    return $this->departamento;
  }

    /**
     * Get idPais
     *
     * @return \AppBundle\Entity\Paises
     */
    public function getIdPais()
    {
        return $this->idPais;
    }
}
