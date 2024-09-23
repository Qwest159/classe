<?php
require_once "CompteBancaire.php";
class Client
{
    private string $nom;
    private string $prenom;
    private array $comptes = [];

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function ajouterCompte(CompteBancaire $compteBancaire)
    {
        $comptes[] = $compteBancaire;
        return $comptes;
    }
    public function getcomptes(): array
    {
        return $this->comptes;
    }
}
