<?php


class Compte
{
    private $numero;
    private $solde;

    /**
     * Compte constructor.
     * @param $numero
     * @param $solde
     */
    public function __construct($numero, $solde)
    {
        $this->numero = $numero;
        $this->solde = $solde;
    }

}

?>