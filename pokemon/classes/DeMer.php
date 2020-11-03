<?php

class DeMer extends Acquatique
{
//    public function posseder(): string
//    {
//        return "";
//    }
    public function vitesse(): float
    {
        return $vitesse = ($this->poids / (25* $this->nombreNageoires));
    }
    public function __toString()
    {
        return parent::__toString()


            ;
    }

}