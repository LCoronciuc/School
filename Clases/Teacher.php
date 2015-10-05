<?php

/**
 * Created by PhpStorm.
 * User: liviucoronciuc
 * Date: 5/10/15
 * Time: 19:10
 */
class Teacher extends Person
{
    use Worker;

    public $specialization;

    public function render()
    {
        parent::render();

    }


}