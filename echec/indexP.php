<?php

            const NB_LIGNES = 8;
            const NB_COLONNES = 8;
            const PIECES = [
                "&#9820;", "&#9822;", "&#9821;", "&#9819;", "&#9818;", "&#9821;", "&#9822;", "&#9820;",
                "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;"
              ];
            
            $tableau = "";
           

            //fonction qui va retourner une chaine de caractère
            function getPion(int $x,int $y): string
            {
                $ligneJoueurNoir = [0,1];
                $ligneJoueurBlanc = [NB_LIGNES-2,NB_LIGNES-1];

                if (in_array($x, $ligneJoueurNoir)) {
                    //Correspond à la ligne du tableau, ne pas oublier qu'on part de 0
                    if ($x == 1) {
                      $pion = PIECES[$y + 8];  
                    }
                    else $pion = PIECES[$y];
                    return "<span class='pion'>".$pion."</div>";
                } 

                if (in_array($x, $ligneJoueurBlanc)) {
                    if ($x == 6) {
                        $pion = PIECES[$y + 8];  
                      }
                      else $pion = PIECES[$y];
                      return "<span class='pionJ2'>".$pion."</div>";

                }

                return "";
            }

            //La boucle de lignes
            for($i = 0; $i < NB_LIGNES; $i++){                
                $ligne = "<tr>";
                //la boucle des cellules de la ligne
                for($j = 0; $j < NB_COLONNES; $j++) {  
                    
                    //Alterner les couleurs
                    if ($i%2 == 1) {
                        if ($j%2 == 0) {
                            $cell = "<td class ='noire'>";
                        } else {
                            $cell = "<td class ='blanc'>";
                        }             
                    } else {
                        if ($j%2 == 0) {
                            $cell = "<td class ='blanc'>";
                        } else {
                            $cell = "<td class ='noire'>";
                        }             
                    }
                    $cell.= getPion($i, $j)."</td>";
                    $ligne.= $cell;
                }

                $ligne.= "</tr>";
                $tableau.= $ligne;

            }

            
?>
        



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    <table id="tableau">
        <?= $tableau ?>
    </table>
   

    
</body>
</html>

