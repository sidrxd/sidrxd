<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);
$validator->field('phone')->areRequired()->maxLength(50);
$validator->field('fathername')->areRequired()->maxLength(50);
$validator->field('class')->areRequired()->maxLength(50);




$pp->sendEmailTo('shashi.ischool@gmail.com', 'sidrxd@gmail.com');

echo $pp->process($_POST);