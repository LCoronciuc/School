<?php

/**
 * Created by PhpStorm.
 * User: liviucoronciuc
 * Date: 5/10/15
 * Time: 19:10
 */
class Teacher extends Worker
{
    /**
     * @var
     */
    public $specialization;

    /**
     * @return mixed
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }


}