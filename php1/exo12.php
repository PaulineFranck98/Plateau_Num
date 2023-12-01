<h1>Exercice 12</h1>
<?php


function bonjourLangues($langueNoms){

// tri des clés (keys) par ordre alphabétique 
    ksort($langueNoms);

    //la boucle parcourt le tableau trié 
    foreach ($langueNoms as $langueNom => $value) {
        // vérifie la langue de chaque nom 
        if( $value == "français"){

        //  puis affiche la salutation correspondante
            echo "Salut $langueNom<br>";

        }else if ($value == "espagnol"){

            echo "Holà $langueNom<br>";

        }else if ($value == "anglais"){

            echo "Hello $langueNom<br>";
        }
    }
}

// tableau contenant des noms associés à des langues différentes (tableau associatif key,value)
$langueNoms = [
    "Mickaël" => "français",
    "Virgile" => "espagnol",
    "Marie-Claire" => "anglais",
];

// appel de la fonction
bonjourLangues($langueNoms);
