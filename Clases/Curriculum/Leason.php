<?php
namespace Com\Iesebre\Dam2\liviucoronciuc\Curriculum;


class Leason extends StudyModule
{

    public $teacher;

    public $classGroup;

    /**
     * Leason constructor.
     * @param $teacher
     * @param $classGroup
     */
    public function __construct($teacher, $classGroup)
    {
        $this->teacher = $teacher;
        $this->classGroup = $classGroup;
    }

    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * @return mixed
     */
    public function getClassGroup()
    {
        return $this->classGroup;
    }

    /**
     * @param mixed $classGroup
     */
    public function setClassGroup($classGroup)
    {
        $this->classGroup = $classGroup;
    }



}