<?php

// affichage d'un tableau avec pays, capitales associées et lien wiki -----------------

// tableau associatif clé,valeur
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];



// prend en paramètres tableau capitales
function afficherTableHTML($capitales){

    $lien = "https://fr.wikipedia.org/wiki/";
    // capitales par ordre alphabétique
    ksort($capitales);

    echo "<table border='1'>",
    "<tr><th><b>Pays</b></th><th><b>Capitale</b></th><th><b>Lien wiki</b></th></tr>";

    //  as : pour assigner chaque élément du tableau à une variable spécifique
    // pour chaque élément du tableau "capitales" on prend chaque nom de pays $pays et onn associde la capitale correspondante à $capitale
    foreach ($capitales as $pays => $capitale){
    // $pays prend la valeur de la clé (clé,valeur), et $capitales la valeur qui correspond à la clé;

        // concaténation du lien avec $capitale pour associer chaque capitale avec son lien wiki
        // possible seulement car le lien est sous forme : "https://.......org.wiki/Berlin" (ex)
        // $lien = "https://fr.wikipedia.org/wiki/".$capitale;

        // concaténation et affichage de mon tableau html avec les liens 'qui s'ouvrent dans un nouvel onglet) wiki associés à $capitale 
        echo '<tr><td>'.strtoupper($pays).'</td><td>'.$capitale.'</td><td><a target=_blank href="'.$lien.$capitale .'">Lien</a></td></tr>';
    }

echo "</table>";

}

afficherTableHTML($capitales);