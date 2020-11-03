<?php

class DeCroisiere extends Acquatique
{
//    public function posseder(): string
//    {
//        return "";
//    }
    public function vitesse(): float
    {
        return $vitesse = ($this->poids / (2*$this->nombreNageoires))/2;
    }
    public function __toString()
    {
        return parent::__toString();
    }

}


/*"Je suis le Pokémon Bulbizarre mon poids est de 15 kg, ma vitesse
est de 0,9 km/h j'ai 3 nageoires" */