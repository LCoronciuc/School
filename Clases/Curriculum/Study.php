<?php

namespace Com\Iesebre\Dam2\liviucoronciuc\Curriculum;


class Study extends Course
{

    public $name;

    public $desciption;

    /**
     * Study constructor.
     * @param $desciption
     * @param $name
     */
    public function __construct($desciption, $name)
    {
        $this->desciption = $desciption;
        $this->name = $name;
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
    public function getDesciption()
    {
        return $this->desciption;
    }

    /**
     * @param mixed $desciption
     */
    public function setDesciption($desciption)
    {
        $this->desciption = $desciption;
    }



}