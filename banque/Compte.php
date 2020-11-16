<?php

class Compte {

    private $_libelle;
    private $_solde;
    private $_devise;
    private $_titulaire;

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $titulaire->ajouterCompte($this);
        $this->_titulaire = $titulaire;

    }

    public function get_libelle() {
        return $this->_libelle;
    }

    public function set_libelle($_libelle) {
        $this->_libelle = $_libelle;
        return $this;
    }

    public function get_solde() {
        return $this->_solde;
    }

    public function set_solde($_solde) {
        $this->_solde = $_solde;
        return $this;
    }

    public function get_devise() {
        return $this->_devise;
    }

    public function set_devise($_devise) {
        $this->_devise = $_devise;
        return $this;
    }

    public function getTitulaire() {
        return $this->_titulaire;
    }

    public function setTitulaire($titulaire) {
        $this->_titulaire = $titulaire;
        return $this;

    }

    function credit($montant) {
        $this->_solde+=$montant;
        echo "Le compte ".$this->get_libelle()."  est crédité de ". $montant ." € le nouveau solde est de ".$this->get_solde()." € </br>";
        return $this;
    }

    function debit($montant) {
        $this->_solde-=$montant;
        echo "Le compte ".$this->get_libelle()." est débité de ". $montant ." € le nouveau solde est de ".$this->get_solde()." €</br>";
        return $this;
    }

    function virement($montant, Compte $compteDestinataire) {
        $this->debit($montant);
        $compteDestinataire->credit($montant);
        echo "Le virement a été fait !</br>";
        return $this;
    }

    public function __toString() {
        $titulaire = $this->getTitulaire();
        return $this->get_libelle()." ".$this->get_solde()." ".$this->get_devise(). " appartient à ".$titulaire->get_prenom() . " " . $titulaire->get_nom() ."</br>";
    }
}




?>