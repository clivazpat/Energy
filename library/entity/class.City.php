<?php

namespace Energy\Library\Entity;

class City
{
    private $id;
    private $name;
    private $npa;

    /**
     * City constructor.
     * @param $id
     * @param $name
     * @param $npa
     */
    public function __construct($id, $name, $npa)
    {
        $this->id = $id;
        $this->name = $name;
        $this->npa = $npa;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNpa()
    {
        return $this->npa;
    }

    /**
     * @param mixed $npa
     */
    public function setNpa($npa)
    {
        $this->npa = $npa;
    }
}