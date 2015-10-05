<?php

/**
 * Created by PhpStorm.
 * User: liviucoronciuc
 * Date: 5/10/15
 * Time: 19:10
 */
class Worker extends Person
{

    /**
     * @var
     */
    public $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}