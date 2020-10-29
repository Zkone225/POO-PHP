<?php


class Pokemon
{
    private $nom;
    private $poids;

public function __construct(string $nom, float $poids)
{
    $this->nom = $nom;
    $this->poids = $poids;
}

    public function getPoids()
    {
        return $this->poids;
    }


    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function __toString()
    {
        return "Je suis un pokemon ".get_class($this).
            "<br>Je suis le pokemon ".$this->getNom().
            "<br>mon poids est de ".$this->getPoids()." kg"
            ;
    }


//    public abstract function posseder(): string;

 /*   public function __toString()
    {
        return "Je suis le pokemon".$this->nom.
            "<br>mon poids est de".$this->poids."kg";


    }*/


}



