<?php 

    class Livre {

        private $_titre;
        private $_pages;
        private $_parution;
        private $_prix;
        private $_auteur;

        public function __construct(string $titre, int $pages, int $parution, int $prix, Auteur $auteur ) {
            $this->_titre = $titre;
            $this->_pages = $pages;
            $this->_parution = $parution;
            $this->_prix = $prix;
            $auteur->ajouterLivre($this);
            $this->_auteur = $auteur;     
        }

        public function get_titre() {
                return $this->_titre;
        }

        public function set_titre($_titre) {
                $this->_titre = $_titre;
                return $this;
        }

        public function get_pages() {
                return $this->_pages;
        }

        public function set_pages($_pages) {
                $this->_pages = $_pages;
                return $this;
        }

        public function get_parution() {
                return $this->_parution;
        }

        public function set_parution($_parution) {
                $this->_parution = $_parution;
                return $this;
        }

        public function get_prix() {
                return $this->_prix;
        }

        public function set_prix($_prix) {
                $this->_prix = $_prix;
                return $this;
        }

        public function get_auteur() {
                return $this->_auteur;
        }

        public function set_auteur($_auteur) {
                $this->_auteur = $_auteur;
                return $this;
        }

        public function __toString() {

            return $this->get_titre()." (".$this->get_parution().") : ".$this->get_pages()." pages / ".$this->get_prix(). "€</br>";
        }
    }