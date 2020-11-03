<?php

class Sportif extends Terrestre
{

    private $frequenceQuardiaque;

    public function __construct(string $nom, int $poids, int $nombrePattes, float $taille, int $frequenceQuardiaque)
    {
        parent::__construct($nom, $poids,$nombrePattes,$taille);
        $this->frequenceQuardiaque = $frequenceQuardiaque;
    }


    public function getFrequenceQuardiaque(): int
    {
        return $this->frequenceQuardiaque;
    }


    public function setFrequenceQuardiaque(int $frequenceQuardiaque): void
    {
        $this->frequenceQuardiaque = $frequenceQuardiaque;
    }

    public function __toString()
    {
        return parent::__toString().
            "<br>Ma frequence cardiaque est de:".$this->getFrequenceQuardiaque()." pulsation à la minute"

            ;
    }
}

