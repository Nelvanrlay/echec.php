<?php

class Auteur {

    private $_nom;
    private $_prenom;
    //Création d'un tableau vide pour pouvoir y ajouer les livres
    private $_bibliographie = [];


    public function __construct(string $nom, string $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
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

    //C'est comme un setter qui finalement modifier le tableau bibliographie, il va pousser dans la classe Livre
    // https://www.php.net/manual/fr/function.array-push.php
    public function ajouterLivre(Livre $livre) {
        $this->_bibliographie[] = $livre;
    }

    //Lire le contenu du tableau qui contient différentes instance de la classe Livre
    public function afficherBibliographie(): string
    {
        //partir d'une chaine de caractère vide pour retourner quelque chose quand même et éviter que index.php plante en retournant rien
        $result = '';

        //Boucle qui va lire $this->_bibliographie
        foreach ($this->_bibliographie as $livre){
            //Bien penser à la concaténation des éléments sinon ça va écraser les autres. 
            $result .= $livre->__toString();
        }

        //Utilisation de l'opérateur ternaire !
        return $result == '' ? "Aucun livre pour cet auteur... :'( </br>" : $result;
    }

    public function __toString() {
        return "<strong>L'auteur est ".$this->get_nom()." ".$this->get_prenom()." </strong></br>";
    }
}

?>