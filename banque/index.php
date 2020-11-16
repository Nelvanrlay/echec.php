<?php

require "Titulaire.php";
require "Compte.php";

$titu1 = new Titulaire("Colombet", "Juliette", "1991-08-17", "Taillecourt");
$comp1 = new Compte("Livret A", 2000, "€", $titu1);
$comp2 = new Compte("Livret Z", 2, "€", $titu1);

$titu2 = new Titulaire("Doc was taken", "Teo", "1995-01-04", "Montbéliard");
$comp3 = new Compte("Livret D", 1, "€", $titu2);

$titu3 = new Titulaire("Perfect", "Neko", "1801-01-04", "Audincourt");

echo $titu1;
echo $titu1->afficherCompte()."</br>";

$comp1->credit(200);
$comp1->debit(50);

$comp1->virement(5, $comp2);

echo $titu1->afficherCompte()."</br>";


echo $titu2;
echo $titu2->afficherCompte()."</br>";

$comp3->virement(550, $comp2);

echo $titu2->afficherCompte()."</br>";


echo $titu3;
echo $titu3->afficherCompte()."</br>";


//En plus simple
$titulaires = [$titu1, $titu2, $titu3];
foreach ($titulaires as $titulaire) {
    echo $titulaire;
    echo $titulaire->afficherCompte()."</br>";
}






?>