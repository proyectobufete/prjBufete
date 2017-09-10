<?php

namespace AppBundle\Entity;

/**
 * Estudiantes
 */
class Estudiantes
{
    /**
     * @var integer
     */
    private $idEstudiante;

    /**
     * @var string
     */
    private $carneEstudiante;

    /**
     * @var boolean
     */
    private $cierrePensum;

    /**
     * @var integer
     */
    private $estadoEstudiante;

    /**
     * @var \AppBundle\Entity\Personas
     */
    private $idPersona;


    /**
     * Get idEstudiante
     *
     * @return integer
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }

    /**
     * Set carneEstudiante
     *
     * @param string $carneEstudiante
     *
     * @return Estudiantes
     */
    public function setCarneEstudiante($carneEstudiante)
    {
        $this->carneEstudiante = $carneEstudiante;

        return $this;
    }

    /**
     * Get carneEstudiante
     *
     * @return string
     */
    public function getCarneEstudiante()
    {
        return $this->carneEstudiante;
    }

    /**
     * Set cierrePensum
     *
     * @param boolean $cierrePensum
     *
     * @return Estudiantes
     */
    public function setCierrePensum($cierrePensum)
    {
        $this->cierrePensum = $cierrePensum;

        return $this;
    }

    /**
     * Get cierrePensum
     *
     * @return boolean
     */
    public function getCierrePensum()
    {
        return $this->cierrePensum;
    }

    /**
     * Set estadoEstudiante
     *
     * @param integer $estadoEstudiante
     *
     * @return Estudiantes
     */
    public function setEstadoEstudiante($estadoEstudiante)
    {
        $this->estadoEstudiante = $estadoEstudiante;

        return $this;
    }

    /**
     * Get estadoEstudiante
     *
     * @return integer
     */
    public function getEstadoEstudiante()
    {
        return $this->estadoEstudiante;
    }



    public function __toString()
  {
    return $this->carneEstudiante;
  }

    /**
     * Set idPersona
     *
     * @param \AppBundle\Entity\Personas $idPersona
     *
     * @return Estudiantes
     */
    public function setIdPersona(\AppBundle\Entity\Personas $idPersona = null)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return \AppBundle\Entity\Personas
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }
}
