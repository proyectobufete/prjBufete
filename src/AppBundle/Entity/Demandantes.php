<?php

namespace AppBundle\Entity;

/**
 * Demandantes
 */
class Demandantes
{
    /**
     * @var integer
     */
    private $idDemandante;

    /**
     * @var string
     */
    private $nombreDemandante;

    /**
     * @var integer
     */
    private $edadDemandante;

    /**
     * @var integer
     */
    private $dpiDemandante;

    /**
     * @var string
     */
    private $cedulaDemandante;

    /**
     * @var string
     */
    private $direccionDemandante;

    /**
     * @var string
     */
    private $dirtrabajoDemandante;

    /**
     * @var integer
     */
    private $telefonoDemandante;

    /**
     * @var \AppBundle\Entity\Estadosciviles
     */
    private $idEstadocivil;

    /**
     * @var \AppBundle\Entity\Trabajos
     */
    private $idTrabajo;

    /**
     * @var \AppBundle\Entity\Ciudad
     */
    private $idCiudad;


    /**
     * Get idDemandante
     *
     * @return integer
     */
    public function getIdDemandante()
    {
        return $this->idDemandante;
    }

    /**
     * Set nombreDemandante
     *
     * @param string $nombreDemandante
     *
     * @return Demandantes
     */
    public function setNombreDemandante($nombreDemandante)
    {
        $this->nombreDemandante = $nombreDemandante;

        return $this;
    }

    /**
     * Get nombreDemandante
     *
     * @return string
     */
    public function getNombreDemandante()
    {
        return $this->nombreDemandante;
    }

    /**
     * Set edadDemandante
     *
     * @param integer $edadDemandante
     *
     * @return Demandantes
     */
    public function setEdadDemandante($edadDemandante)
    {
        $this->edadDemandante = $edadDemandante;

        return $this;
    }

    /**
     * Get edadDemandante
     *
     * @return integer
     */
    public function getEdadDemandante()
    {
        return $this->edadDemandante;
    }

    /**
     * Set dpiDemandante
     *
     * @param integer $dpiDemandante
     *
     * @return Demandantes
     */
    public function setDpiDemandante($dpiDemandante)
    {
        $this->dpiDemandante = $dpiDemandante;

        return $this;
    }

    /**
     * Get dpiDemandante
     *
     * @return integer
     */
    public function getDpiDemandante()
    {
        return $this->dpiDemandante;
    }

    /**
     * Set cedulaDemandante
     *
     * @param string $cedulaDemandante
     *
     * @return Demandantes
     */
    public function setCedulaDemandante($cedulaDemandante)
    {
        $this->cedulaDemandante = $cedulaDemandante;

        return $this;
    }

    /**
     * Get cedulaDemandante
     *
     * @return string
     */
    public function getCedulaDemandante()
    {
        return $this->cedulaDemandante;
    }

    /**
     * Set direccionDemandante
     *
     * @param string $direccionDemandante
     *
     * @return Demandantes
     */
    public function setDireccionDemandante($direccionDemandante)
    {
        $this->direccionDemandante = $direccionDemandante;

        return $this;
    }

    /**
     * Get direccionDemandante
     *
     * @return string
     */
    public function getDireccionDemandante()
    {
        return $this->direccionDemandante;
    }

    /**
     * Set dirtrabajoDemandante
     *
     * @param string $dirtrabajoDemandante
     *
     * @return Demandantes
     */
    public function setDirtrabajoDemandante($dirtrabajoDemandante)
    {
        $this->dirtrabajoDemandante = $dirtrabajoDemandante;

        return $this;
    }

    /**
     * Get dirtrabajoDemandante
     *
     * @return string
     */
    public function getDirtrabajoDemandante()
    {
        return $this->dirtrabajoDemandante;
    }

    /**
     * Set telefonoDemandante
     *
     * @param integer $telefonoDemandante
     *
     * @return Demandantes
     */
    public function setTelefonoDemandante($telefonoDemandante)
    {
        $this->telefonoDemandante = $telefonoDemandante;

        return $this;
    }

    /**
     * Get telefonoDemandante
     *
     * @return integer
     */
    public function getTelefonoDemandante()
    {
        return $this->telefonoDemandante;
    }

    /**
     * Set idEstadocivil
     *
     * @param \AppBundle\Entity\Estadosciviles $idEstadocivil
     *
     * @return Demandantes
     */
    public function setIdEstadocivil(\AppBundle\Entity\Estadosciviles $idEstadocivil = null)
    {
        $this->idEstadocivil = $idEstadocivil;

        return $this;
    }

    /**
     * Get idEstadocivil
     *
     * @return \AppBundle\Entity\Estadosciviles
     */
    public function getIdEstadocivil()
    {
        return $this->idEstadocivil;
    }

    /**
     * Set idTrabajo
     *
     * @param \AppBundle\Entity\Trabajos $idTrabajo
     *
     * @return Demandantes
     */
    public function setIdTrabajo(\AppBundle\Entity\Trabajos $idTrabajo = null)
    {
        $this->idTrabajo = $idTrabajo;

        return $this;
    }

    /**
     * Get idTrabajo
     *
     * @return \AppBundle\Entity\Trabajos
     */
    public function getIdTrabajo()
    {
        return $this->idTrabajo;
    }

    /**
     * Set idCiudad
     *
     * @param \AppBundle\Entity\Ciudad $idCiudad
     *
     * @return Demandantes
     */
    public function setIdCiudad(\AppBundle\Entity\Ciudad $idCiudad = null)
    {
        $this->idCiudad = $idCiudad;

        return $this;
    }

    /**
     * Get idCiudad
     *
     * @return \AppBundle\Entity\Ciudad
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }
}

