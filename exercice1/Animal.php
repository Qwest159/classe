<?php
require_once  "Nourriture.php";

class Animal
{
    private string $nom;
    private int $age;
    private string $espece;

    public function __construct(string $nom, int $age, string $espece)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->espece = $espece;
    }
    public function manger(Nourriture $nourriture)
    {;
        echo "l'animal $this->nom mange du {$nourriture->getnom()} ,il reste {$nourriture->diminuer()} \n";
    }
    public function dormir()
    {
        echo "l'animal dort \n";
    }
    public function bouger()
    {
        echo "l'animal bouger \n";
    }
}
