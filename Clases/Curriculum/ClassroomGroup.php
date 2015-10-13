<?php

namespace Com\Iesebre\Dam2\liviucoronciuc\Curriculum;

use Com\Iesebre\Dam2\liviucoronciuc\Persons\Student;

class ClassroomGroup
{
    public $students = array();

    /**
     * ClassroomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function addStudent(Student $student)
    {
        array_push($this->students,$student);
    }



    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }



}