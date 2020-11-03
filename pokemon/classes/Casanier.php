<?php

class Casanier extends Terrestre
{

    private $heuresTv;

    public function __construct(string $nom, int $poids, int $nombrePattes, float $taille, int $heuresTv)
    {
        parent::__construct($nom, $poids,$nombrePattes,$taille);
        $this->heuresTv = $heuresTv;
    }


    public function getHeuresTv(): int
    {
        return $this->heuresTv;
    }

    public function setHeuresTv(int $heuresTv): void
    {
        $this->heuresTv = $heuresTv;
    }


    public function __toString()
    {
        return parent::__toString().
            "<br>Je regarde la tele au moins ".$this->getHeuresTv()." heures tous les jours."

            ;
    }

}