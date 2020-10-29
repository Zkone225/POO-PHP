<?php


abstract class Acquatique extends Pokemon
{
    protected $nombreNageoires;



    public function __construct(string $nom, float $poids, int $nombreNageoires)
    {
        parent::__construct($nom, $poids);
        $this->nombreNageoires = $nombreNageoires;
    }


    public function getNombreNageoires(): int
    {
        return $this->nombreNageoires;
    }


    public function setNombreNageoires(int $nombreNageoires): void
    {
        $this->nombreNageoires = $nombreNageoires;
    }

    public abstract function vitesse(): float;

    public function __toString()
    {
        return parent::__toString() .
            "<br>ma vitesse est:".   $this->vitesse() . ".km/h".
            "<br>j'ai " . $this->getNombreNageoires() . " pattes"


            ;
    }

}


