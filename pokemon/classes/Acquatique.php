<?php


abstract class Acquatique extends Pokemon
{
    private $nombreNageoires;



    public function __construct(int $nombreNageoires)
    {
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

    public abstract function vitesse(): int;


}
