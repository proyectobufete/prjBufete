<?php

namespace AppBundle\Entity;

/**
 * Casos
 */
class Casos
{
    /**
     * @var integer
     */
    private $idCaso;

    /**
     * @var integer
     */
    private $noCaso;

    /**
     * @var \DateTime
     */
    private $fechaCaso;

    /**
     * @var string
     */
    private $asunto;

    /**
     * @var string
     */
    private $pruebasCaso;

    /**
     * @var integer
     */
    private $asignatarioCaso;

    /**
     * @var integer
     */
    private $estadoCaso;

    /**
     * @var \AppBundle\Entity\Demandantes
     */
    private $idDemandante;

    /**
     * @var \AppBundle\Entity\Demandados
     */
    private $idDemandado;

    /**
     * @var \AppBundle\Entity\Estudiantes
     */
    private $idEstudiante;

    /**
     * @var \AppBundle\Entity\Tribunales
     */
    private $idTribunal;

    /**
     * @var \AppBundle\Entity\Personas
     */
    private $idPersona;

    /**
     * @var \AppBundle\Entity\Tipocaso
     */
    private $idTipo;


    /**
     * Get idCaso
     *
     * @return integer
     */
    public function getIdCaso()
    {
        return $this->idCaso;
    }

    /**
     * Set noCaso
     *
     * @param integer $noCaso
     *
     * @return Casos
     */
    public function setNoCaso($noCaso)
    {
        $this->noCaso = $noCaso;

        return $this;
    }

    /**
     * Get noCaso
     *
     * @return integer
     */
    public function getNoCaso()
    {
        return $this->noCaso;
    }

    /**
     * Set fechaCaso
     *
     * @param \DateTime $fechaCaso
     *
     * @return Casos
     */
    public function setFechaCaso($fechaCaso)
    {
        $this->fechaCaso = $fechaCaso;

        return $this;
    }

    /**
     * Get fechaCaso
     *
     * @return \DateTime
     */
    public function getFechaCaso()
    {
        return $this->fechaCaso;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     *
     * @return Casos
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set pruebasCaso
     *
     * @param string $pruebasCaso
     *
     * @return Casos
     */
    public function setPruebasCaso($pruebasCaso)
    {
        $this->pruebasCaso = $pruebasCaso;

        return $this;
    }

    /**
     * Get pruebasCaso
     *
     * @return string
     */
    public function getPruebasCaso()
    {
        return $this->pruebasCaso;
    }

    /**
     * Set asignatarioCaso
     *
     * @param integer $asignatarioCaso
     *
     * @return Casos
     */
    public function setAsignatarioCaso($asignatarioCaso)
    {
        $this->asignatarioCaso = $asignatarioCaso;

        return $this;
    }

    /**
     * Get asignatarioCaso
     *
     * @return integer
     */
    public function getAsignatarioCaso()
    {
        return $this->asignatarioCaso;
    }

    /**
     * Set estadoCaso
     *
     * @param integer $estadoCaso
     *
     * @return Casos
     */
    public function setEstadoCaso($estadoCaso)
    {
        $this->estadoCaso = $estadoCaso;

        return $this;
    }

    /**
     * Get estadoCaso
     *
     * @return integer
     */
    public function getEstadoCaso()
    {
        return $this->estadoCaso;
    }

    /**
     * Set idDemandante
     *
     * @param \AppBundle\Entity\Demandantes $idDemandante
     *
     * @return Casos
     */
    public function setIdDemandante(\AppBundle\Entity\Demandantes $idDemandante = null)
    {
        $this->idDemandante = $idDemandante;

        return $this;
    }

    /**
     * Get idDemandante
     *
     * @return \AppBundle\Entity\Demandantes
     */
    public function getIdDemandante()
    {
        return $this->idDemandante;
    }

    /**
     * Set idDemandado
     *
     * @param \AppBundle\Entity\Demandados $idDemandado
     *
     * @return Casos
     */
    public function setIdDemandado(\AppBundle\Entity\Demandados $idDemandado = null)
    {
        $this->idDemandado = $idDemandado;

        return $this;
    }

    /**
     * Get idDemandado
     *
     * @return \AppBundle\Entity\Demandados
     */
    public function getIdDemandado()
    {
        return $this->idDemandado;
    }

    /**
     * Set idEstudiante
     *
     * @param \AppBundle\Entity\Estudiantes $idEstudiante
     *
     * @return Casos
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
     * Set idTribunal
     *
     * @param \AppBundle\Entity\Tribunales $idTribunal
     *
     * @return Casos
     */
    public function setIdTribunal(\AppBundle\Entity\Tribunales $idTribunal = null)
    {
        $this->idTribunal = $idTribunal;

        return $this;
    }

    /**
     * Get idTribunal
     *
     * @return \AppBundle\Entity\Tribunales
     */
    public function getIdTribunal()
    {
        return $this->idTribunal;
    }

    /**
     * Set idPersona
     *
     * @param \AppBundle\Entity\Personas $idPersona
     *
     * @return Casos
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

    /**
     * Set idTipo
     *
     * @param \AppBundle\Entity\Tipocaso $idTipo
     *
     * @return Casos
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

