<?php

class DeCroisiere extends Acquatique
{
//    public function posseder(): string
//    {
//        return "";
//    }
    public function vitesse(): int
    {
        return $vitesse = ($this->getPoids / (2*$this->getNombreNageoires))/2;
    }

}