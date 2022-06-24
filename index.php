<?php

require_once("config.php");

$João = new Usuario();

$João->loadbyId(3);

echo $João;

?>