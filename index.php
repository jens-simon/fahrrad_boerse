<?php

require_once "classes/Fahrrad.php";
require_once "classes/Verkaeufer.php";

// 1. Fahrrad
$fahrrad = new Fahrrad("rot","Porsche","Jens","Simon");
$fahrrad->setFarbe("blau");
$fahrrad->setVerkaeuferVorname("Hans");
$fahrrad->setVerkaeuferNachname("Müller");

//$fahrrad=null;

var_dump($fahrrad);
