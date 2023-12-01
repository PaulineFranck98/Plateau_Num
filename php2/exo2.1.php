<?php

// tableau associatif clé,valeur
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
];


// déclaration de ma fonction (pour afficher le tableau html) prend en paramètres tableau capitales
function afficherTableHTML($capitales){

    // capitales par ordre alphabétique
    ksort($capitales);

    // echo "ouvre"/"débute" la balise html <table> qui possède une bordure 
    echo "<table border='1'>",
    "<tr><th><b>Pays</b></th><th><b>Capitale</b></th></tr>";
    // tr = table row (lignes), th = table head (en-têtes colonnes), td = table data (autres données)

        //  as : pour assigner chaque élément du tableau à une variable spécifique
        // pour chaque élément du tableau "capitales" on prend chaque nom de pays $pays et on associde la capitale correspondante à $capitale :
        // forEach parcourt chaque élément du tableau
        forEach ($capitales as $pays => $capitales){
         // $pays prend la valeur de la clé (clé,valeur), et $capitales la valeur qui correspond à la clé;

            // affichage de mon tableau avc le pays en majuscule (strtoupper)
            echo "<tr><td>" .strtoupper($pays) . "</td><td>" .$capitales ."</td></tr>";
        }
    
    // clôture mon tableau 
    echo "</table>";
}

// appel de ma fonction
afficherTableHTML($capitales);

// <table>
// <tr> : signifie table row, ligne
// <th> : signfie table header (en-têtes de colonnes)
// <td> : signifie table data (données normales) 
//    <tr> 
//       <th>"Pays"</th>
//       <th>"Capitale"</th>
//    </tr>
//    <tr>
//       <td>"France"</td>
//       <td>"Paris"</td>
//     </tr>
//     <tr>  
//       <td>"Allemagne"</td>
//       <td>"Berlin"</td>
//    </tr>
//     <tr>  
//       <td>"USA"</td>
//       <td>"Washington"</td>
//    </tr>
//     <tr>  
//       <td>"Italie"</td>
//       <td>"Rome"</td>
//    </tr>
// </table> 


