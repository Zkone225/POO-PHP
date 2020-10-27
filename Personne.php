<?php

class Personne
{
    private $prenom;
    private $age;
    private $conjoint;

    public function __construct($prenom, $age)
    {
        $this->nom = $prenom;
        $this->age = $age;
        $this->conjoint=null;

    }


    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function getConjoint()
    {
        return $this->conjoint;
    }

    public function seMarier(personne $personne)
    {
     if($this->age >=18
         &&
         $personne->age >=18
         &&
         $this->conjoint==null
         &&
         $personne->conjoint==null){

     }
     $this->conjoint=$personne;
     $personne->conjoint=$this;
    }

}

?>