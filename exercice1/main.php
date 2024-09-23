<?php
require_once "Animal.php";
require_once "Nourriture.php";

$bamb = new Animal("panda", 5, "mamif");
$nourriture = new Nourriture("pizza", 5);
$bamb->manger($nourriture);
$bamb->dormir();
$bamb->bouger();
