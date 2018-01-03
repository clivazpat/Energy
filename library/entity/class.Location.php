<?php

namespace Energy\Library\Entity;

class Location
{
    private $id;
    private $idCity;
    private $street;
    private $number;

    /**
     * Location constructor.
     * @param $id
     * @param $idCity
     * @param $street
     * @param $number
     */
    public function __construct($id, $idCity, $street, $number)
    {
        $this->id = $id;
        $this->idCity = $idCity;
        $this->street = $street;
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
    public function getIdCity()
    {
        return $this->idCity;
    }

    /**
     * @param mixed $idCity
     */
    public function setIdCity($idCity)
    {
        $this->idCity = $idCity;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
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