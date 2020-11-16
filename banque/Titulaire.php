<?php

class Titulaire {

    private $_nom;
    private $_prenom;
    private $_date;
    private $_ville;
    private $_mesComptes = [];

    public function __construct(string $nom, string $prenom, $date, string $ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = $date;
        $this->_ville = $ville;
        $this->_mesComptes = []; 

    }

    public function get_nom() {
        return $this->_nom;
    }

    public function set_nom($_nom) {
        $this->_nom = $_nom;
        return $this;
    }

    public function get_prenom() {
        return $this->_prenom;
    }

    public function set_prenom($_prenom) {
        $this->_prenom = $_prenom;
        return $this;
    }

    public function get_date() {
        return $this->_date;
    }

    //Aficher l'âge

    public function getAge() {
        $dateAujourdhui = new DateTime();
        $dateN = new DateTime($this->_date); //Convertir un date la chaine de caractère
        $interval = $dateN->diff($dateAujourdhui); //on fait la différence
        return $interval->format("%y ans"); //On retourne l'âge
    }

    public function set_date($_date) {
        $this->_date = $_date;
        return $this;
    }

    public function get_ville() {
        return $this->_ville;
    }

    public function set_ville($_ville) {
        $this->_ville = $_ville;
        return $this;
    }

    public function get_comptes() {
        return $this->_comptes;
    }

    public function set_comptes($_comptes) {
        $this->_comptes = $_comptes;
        return $this;
    }

    //C'est comme un setter qui finalement modifier le tableau mesComptes, il va pousser dans la classe Compte
    // https://www.php.net/manual/fr/function.array-push.php
    public function ajouterCompte(Compte $compte) {
        $this->_mesComptes[] = $compte;
    }

    //Lire le contenu du tableau qui contient différentes instance de la classe Compte
    public function afficherCompte()
    {
        //partir d'une chaine de caractère vide pour retourner quelque chose quand même et éviter que index.php plante en retournant rien
        $result = '';

        //Boucle qui va lire $this->_mesComptes
        foreach ($this->_mesComptes as $compte){
            //Bien penser à la concaténation des éléments sinon ça va écraser les autres. 
            $result .= $compte->__toString();
        }

        //Utilisation de l'opérateur ternaire !
        return $result == '' ? "Aucun compte pour ce client... :'( </br>" : $result;
    }

    public function __toString() {
        return $this->get_nom()." ".$this->get_prenom()." a ".$this->getAge()." habite à ".$this->get_ville()." et possède ". count($this->_mesComptes)." comptes.<br/>";
    }
}


?>