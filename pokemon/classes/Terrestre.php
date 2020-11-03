<?php


abstract class Terrestre extends Pokemon
{
    private $nombrePattes;
    private $taille;

    public function __construct(string $nom, float $poids, int $nombrePattes, float $taille)
    {
        parent::__construct($nom, $poids);
        $this->nombrePattes = $nombrePattes;
        $this->taille = $taille;
    }

    public function getNombrePattes(): int
    {
        return $this->nombrePattes;
    }

    public function setNombrePattes(int $nombrePattes): void
    {
        $this->nombrePattes = $nombrePattes;
    }

    public function getTaille(): float
    {
        return $this->taille;
    }

    public function setTaille(int $taille): void
    {
        $this->taille = $taille;
    }

    public function vitesse(): float
    {
        return $vitesse = $this->nombrePattes * $this->taille * 3;
    }

    public function __toString()
    {
        return parent::__toString() .
            "<br>ma vitesse est:".   $this->vitesse() . ".km/h".
            "<br>j'ai " . $this->getNombrePattes() . " pattes".
            "<br>ma taille est de " . $this->getTaille() . " M"

            ;
    }

}


