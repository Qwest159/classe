<?php
require_once "Animal.php";
require_once "Nourriture.php";

$bamb = new Animal("panda", 5, "mamif");
$nourriture = new Nourriture("maizina", 5);
$bamb->manger($nourriture);
$bamb->dormir();
$bamb->bouger();
