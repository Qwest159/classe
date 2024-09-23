<?php

class CompteBancaire
{
    private string $numero;
    private int $solde;

    public function __construct(string $numero, int $solde)
    {
        $this->numero = $numero;
        $this->solde = $solde;

        // $comptes[] = $this;
    }
    function getnumero()
    {
        return "numero: $this->numero";
    }
    function getsolde()
    {
        return "numero: $this->solde";
    }
    public function crediter(int $montant)
    {
        $this->solde += $montant;
        return "ton solde est de : $this->solde \n";
    }
    public function debiter(int $montant)
    {
        if ($this->solde < $montant) {
            throw new ErrorException("Montant inferieur");
        }
        $this->solde -= $montant;
        return "ton solde est de : $this->solde \n";
    }
}
