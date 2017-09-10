<?php

namespace AppBundle\Entity;

/**
 * Clinicas
 */
class Clinicas
{
    /**
     * @var integer
     */
    private $idClinica;

    /**
     * @var \DateTime
     */
    private $fechaAsignacion;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var integer
     */
    private $estadoClinica;

    /**
     * @var \AppBundle\Entity\Tipocaso
     */
    private $idTipo;

    /**
     * @var \AppBundle\Entity\Estudiantes
     */
    private $idEstudiante;


    /**
     * Get idClinica
     *
     * @return integer
     */
    public function getIdClinica()
    {
        return $this->idClinica;
    }

    /**
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     *
     * @return Clinicas
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;

        return $this;
    }

    /**
     * Get fechaAsignacion
     *
     * @return \DateTime
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Clinicas
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set estadoClinica
     *
     * @param integer $estadoClinica
     *
     * @return Clinicas
     */
    public function setEstadoClinica($estadoClinica)
    {
        $this->estadoClinica = $estadoClinica;

        return $this;
    }

    /**
     * Get estadoClinica
     *
     * @return integer
     */
    public function getEstadoClinica()
    {
        return $this->estadoClinica;
    }

    /**
     * Set idTipo
     *
     * @param \AppBundle\Entity\Tipocaso $idTipo
     *
     * @return Clinicas
     */
    public function setIdTipo(\AppBundle\Entity\Tipocaso $idTipo = null)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get idTipo
     *
     * @return \AppBundle\Entity\Tipocaso
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set idEstudiante
     *
     * @param \AppBundle\Entity\Estudiantes $idEstudiante
     *
     * @return Clinicas
     */
    public function setIdEstudiante(\AppBundle\Entity\Estudiantes $idEstudiante = null)
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }

    /**
     * Get idEstudiante
     *
     * @return \AppBundle\Entity\Estudiantes
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }
}

