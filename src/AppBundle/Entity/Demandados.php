<?php

namespace AppBundle\Entity;

/**
 * Demandados
 */
class Demandados
{
    /**
     * @var integer
     */
    private $idDemandado;

    /**
     * @var string
     */
    private $nombreDemandado;

    /**
     * @var string
     */
    private $direccionDemandado;

    /**
     * @var string
     */
    private $dirnotificacionDemandado;

    /**
     * @var integer
     */
    private $telefonoDemandado;


    /**
     * Get idDemandado
     *
     * @return integer
     */
    public function getIdDemandado()
    {
        return $this->idDemandado;
    }

    /**
     * Set nombreDemandado
     *
     * @param string $nombreDemandado
     *
     * @return Demandados
     */
    public function setNombreDemandado($nombreDemandado)
    {
        $this->nombreDemandado = $nombreDemandado;

        return $this;
    }

    /**
     * Get nombreDemandado
     *
     * @return string
     */
    public function getNombreDemandado()
    {
        return $this->nombreDemandado;
    }

    /**
     * Set direccionDemandado
     *
     * @param string $direccionDemandado
     *
     * @return Demandados
     */
    public function setDireccionDemandado($direccionDemandado)
    {
        $this->direccionDemandado = $direccionDemandado;

        return $this;
    }

    /**
     * Get direccionDemandado
     *
     * @return string
     */
    public function getDireccionDemandado()
    {
        return $this->direccionDemandado;
    }

    /**
     * Set dirnotificacionDemandado
     *
     * @param string $dirnotificacionDemandado
     *
     * @return Demandados
     */
    public function setDirnotificacionDemandado($dirnotificacionDemandado)
    {
        $this->dirnotificacionDemandado = $dirnotificacionDemandado;

        return $this;
    }

    /**
     * Get dirnotificacionDemandado
     *
     * @return string
     */
    public function getDirnotificacionDemandado()
    {
        return $this->dirnotificacionDemandado;
    }


      public function __toString()
        {
          return $this->nombreDemandado;
        }

    /**
     * Set telefonoDemandado
     *
     * @param integer $telefonoDemandado
     *
     * @return Demandados
     */
    public function setTelefonoDemandado($telefonoDemandado)
    {
        $this->telefonoDemandado = $telefonoDemandado;

        return $this;
    }

    /**
     * Get telefonoDemandado
     *
     * @return integer
     */
    public function getTelefonoDemandado()
    {
        return $this->telefonoDemandado;
    }
}
