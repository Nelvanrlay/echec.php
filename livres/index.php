<?php

require "Livre.php";
require "Auteur.php";

$a = new Auteur("Stephon","Kong");
$l1 = new Livre("Ca", 1138, 1989, 20, $a);
$l2 = new Livre("Simetierre", 374, 1983, 15, $a);
$l3 = new Livre("Le Fléau", 823, 1978, 14, $a);
$l4 = new Livre("Shining", 823, 1978, 14, $a);
$l5 = new Livre("Carrie", 1238, 2007, 9, $a);

echo $a;
echo $a->afficherBibliographie()."</br>";


$a2 = new Auteur("H. P.", "Lovecraft");
$l6 = new Livre("L'appel de Cthulhu", 1111, 1928, 25, $a2);
$l7 = new Livre("Les montagnes hallucinées", 2222, 1936, 115, $a2);


echo $a2;
echo $a2->afficherBibliographie()."</br>";

$a3 = new Auteur("J. R. R.", "Tolkien");

echo $a3;
echo $a3->afficherBibliographie()."</br>";


//En plus simple
$auteurs = [$a, $a2, $a3];
foreach ($auteurs as $auteur) {
    echo $auteur;
    echo $auteur->afficherBibliographie()."</br>";
}

?>



