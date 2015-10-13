<?php

namespace Com\Iesebre\Dam2\liviucoronciuc\Curriculum;


class Course extends ClassroomGroup
{

    public $course;

    /**
     * Course constructor.
     * @param $course
     */
    public function __construct($course)
    {
        $this->course = $course;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
    }



}