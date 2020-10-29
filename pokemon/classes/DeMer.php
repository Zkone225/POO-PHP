<?php

class DeMer extends Acquatique
{
//    public function posseder(): string
//    {
//        return "";
//    }
    public function vitesse(): int
    {
        return $vitesse = $this->getPoids / (25* $this->getNombreNageoires);
    }

}