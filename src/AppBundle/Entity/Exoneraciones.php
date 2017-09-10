<?php

namespace AppBundle\Entity;

/**
 * Exoneraciones
 */
class Exoneraciones
{
    /**
     * @var integer
     */
    private $idExoneracion;

    /**
     * @var \DateTime
     */
    private $fechaExamen;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \DateTime
     */
    private $fechasolvencias;

    /**
     * @var \AppBundle\Entity\Estudiantes
     */
    private $idEstudiante;

    /**
     * @var \AppBundle\Entity\Tipocaso
     */
    private $idTipo;


    /**
     * Get idExoneracion
     *
     * @return integer
     */
    public function getIdExoneracion()
    {
        return $this->idExoneracion;
    }

    /**
     * Set fechaExamen
     *
     * @param \DateTime $fechaExamen
     *
     * @return Exoneraciones
     */
    public function setFechaExamen($fechaExamen)
    {
        $this->fechaExamen = $fechaExamen;

        return $this;
    }

    /**
     * Get fechaExamen
     *
     * @return \DateTime
     */
    public function getFechaExamen()
    {
        return $this->fechaExamen;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Exoneraciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechasolvencias
     *
     * @param \DateTime $fechasolvencias
     *
     * @return Exoneraciones
     */
    public function setFechasolvencias($fechasolvencias)
    {
        $this->fechasolvencias = $fechasolvencias;

        return $this;
    }

    /**
     * Get fechasolvencias
     *
     * @return \DateTime
     */
    public function getFechasolvencias()
    {
        return $this->fechasolvencias;
    }

    /**
     * Set idEstudiante
     *
     * @param \AppBundle\Entity\Estudiantes $idEstudiante
     *
     * @return Exoneraciones
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

    /**
     * Set idTipo
     *
     * @param \AppBundle\Entity\Tipocaso $idTipo
     *
     * @return Exoneraciones
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
}

