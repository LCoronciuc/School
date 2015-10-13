<?php

namespace Com\Iesebre\Dam2\liviucoronciuc\Curriculum;


class StudySubModule extends StudyModule
{

    public $unitatFormativa;

    public $duradaUnitatFormativa;

    /**
     * StudySubModule constructor.
     * @param $unitatFormativa
     * @param $duradaUnitatFormativa
     */
    public function __construct($unitatFormativa, $duradaUnitatFormativa)
    {
        $this->unitatFormativa = $unitatFormativa;
        $this->duradaUnitatFormativa = $duradaUnitatFormativa;
    }

    /**
     * @return mixed
     */
    public function getUnitatFormativa()
    {
        return $this->unitatFormativa;
    }

    /**
     * @param mixed $unitatFormativa
     */
    public function setUnitatFormativa($unitatFormativa)
    {
        $this->unitatFormativa = $unitatFormativa;
    }

    /**
     * @return mixed
     */
    public function getDuradaUnitatFormativa()
    {
        return $this->duradaUnitatFormativa;
    }

    /**
     * @param mixed $duradaUnitatFormativa
     */
    public function setDuradaUnitatFormativa($duradaUnitatFormativa)
    {
        $this->duradaUnitatFormativa = $duradaUnitatFormativa;
    }



}