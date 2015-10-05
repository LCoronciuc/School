<?php

/**
 * Created by PhpStorm.
 * User: liviucoronciuc
 * Date: 5/10/15
 * Time: 19:10
 */
class Student extends Person
{
    use Worker;

    public $dual = false;
    public $specialization;


    public function __construct($dual)
    {
        parent::__construct();
        if ($dual != null) {
            $this->dual = $dual;
        }
    }

    public function render()
    {
        $this->type = "estudiant";

        if($this->dual){
            parent::render() . " i cobra" . $this->salary;
        } else {
            parent::render();
        }

        parent::render();
    }

}