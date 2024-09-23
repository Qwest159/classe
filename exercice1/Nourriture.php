<?php
class Nourriture
{
    private string $nom;
    private int $quantite;


    public function __construct(string $nom, int $quantite)
    {
        $this->nom = $nom;
        $this->quantite = $quantite;
    }

    public function diminuer()
    {
        $this->quantite--;
        return $this->quantite;
    }
    public function getnom(): string
    {
        return $this->nom;
    }
}
