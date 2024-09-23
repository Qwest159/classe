<?php

require_once "Client.php";
require_once "CompteBancaire.php";

$client = new Client("Jean", "Marie");
$comptebancaire1 = new CompteBancaire("BE 55448855", 5);
$comptebancaire2 = new CompteBancaire("554545454", 8);
// echo $comptebancaire1->crediter(2);
// echo $comptebancaire1->debiter(7);
$client1 = $client->ajouterCompte($comptebancaire1);
$client2 = $client->ajouterCompte($comptebancaire2);
print_r($client1);
print_r($client2);

// $client_tableau[] = $client->ajouterCompte($comptebancaire1);
// $client_tableau[] = $client->ajouterCompte($comptebancaire2);
// var_dump($client_tableau);
