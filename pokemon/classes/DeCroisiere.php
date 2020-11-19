<?php

class DeCroisiere extends Acquatique
{
//    public function posseder(): string
//    {
//        return "";
//    }
<<<<<<< HEAD
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
=======
    public function vitesse(): int
    {
        return $vitesse = ($this->getPoids / (2*$this->getNombreNageoires))/2;
    }

}
>>>>>>> 16c81682c7a5c6d449d0970eb47a16f25c5801b6
