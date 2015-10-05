<?php
/**
 * Created by PhpStorm.
 * User: liviucoronciuc
 * Date: 5/10/15
 * Time: 20:25
 */

require_once __DIR__ . '/vendor/autoload.php';

use Com\Iesebre\Dam2\liviucoronciuc\Persons\Person;

$person = new Person();

$person ->type = "Pepita";
$person->setGivenName("pepita palotes");

$person->render();