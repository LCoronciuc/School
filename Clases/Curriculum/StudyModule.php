<?php

namespace Com\Iesebre\Dam2\liviucoronciuc\Curriculum;

class StudyModule extends Study
{
    public $moduleName;

    /**
     * @return mixed
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * @param mixed $moduleName
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    }

    /**
     * StudyModule constructor.
     * @param $moduleName
     */
    public function __construct($moduleName)
    {
        $this->moduleName = $moduleName;
    }


}