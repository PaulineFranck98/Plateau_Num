<h1>Exercice 8</h1>

<?php

// Algo qui renvoie  la table de multiplication d'un nombre passé en paramètre-----------------------------


// version 1 : boucle avec for : 
function tableDeMultiplication($param){


    echo "Table de $param :<br>";


    for ($i=1; $i <= 10; $i++) { 


        $resultat = $i * $param;


        echo "$i * $param = $resultat<br>";

    }
    
}



$nombre = 8;

tableDeMultiplication($nombre);


// version 2 : boucle avec while : 
function tableDeMultiplication2($param){

    echo "Table de ".$param. ":<br>";

    $i=1;

    while ($i <= 10) {

        
        $resultat = $i * $param;
        
        echo "$i * $param = $resultat<br>";

        $i++;
        
    }
}


tableDeMultiplication2($nombre);