<?php

namespace Energy\Library\Entity;

class Installation
{
    private $id;
    private $idLocation;
    private $idType;
    private $integrationType;
    private $PVCellsType;
    private $orientation;
    private $slope;
    private $length;
    private $width;
    private $area;
    private $number;

    /**
     * Installation constructor.
     * @param $id
     * @param $idLocation
     * @param $idType
     * @param $integrationType
     * @param $PVCellsType
     * @param $orientation
     * @param $slope
     * @param $length
     * @param $width
     * @param $area
     * @param $number
     */
    public function __construct($id, $idLocation, $idType, $integrationType, $PVCellsType, $orientation, $slope, $length, $width, $area, $number)
    {
        $this->id = $id;
        $this->idLocation = $idLocation;
        $this->idType = $idType;
        $this->integrationType = $integrationType;
        $this->PVCellsType = $PVCellsType;
        $this->orientation = $orientation;
        $this->slope = $slope;
        $this->length = $length;
        $this->width = $width;
        $this->area = $area;
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIdLocation()
    {
        return $this->idLocation;
    }

    /**
     * @param mixed $idLocation
     */
    public function setIdLocation($idLocation)
    {
        $this->idLocation = $idLocation;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getIntegrationType()
    {
        return $this->integrationType;
    }

    /**
     * @param mixed $integrationType
     */
    public function setIntegrationType($integrationType)
    {
        $this->integrationType = $integrationType;
    }

    /**
     * @return mixed
     */
    public function getPVCellsType()
    {
        return $this->PVCellsType;
    }

    /**
     * @param mixed $PVCellsType
     */
    public function setPVCellsType($PVCellsType)
    {
        $this->PVCellsType = $PVCellsType;
    }

    /**
     * @return mixed
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param mixed $orientation
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * @return mixed
     */
    public function getSlope()
    {
        return $this->slope;
    }

    /**
     * @param mixed $slope
     */
    public function setSlope($slope)
    {
        $this->slope = $slope;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}