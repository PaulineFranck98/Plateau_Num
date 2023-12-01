<?php
// Affichage formulaire boutons radio ------------------------------------------------------------------

$nomsRadios = [

    "Masculin" => "Monsieur", 
    "Féminin" => "Madame", 
    "Autre" => "Mademoiselle"
];

//ici le nom du paramètre placé dans la fonction sert uniquement d'indicateur 
function afficherRadio($nomsRadios){

    echo "<form>";

    foreach ($nomsRadios as $nomRadio => $value) {

        // les 3 choix sont dans le même groupe grâce à "name=genre" --> regroupés grâce à name
        // permet de ne cliquer que sur un seul chox dans chaque groupe
        echo "<input type='radio'name='genre'><label for='genre'>".$nomRadio."</label><br>";

    }   

    echo "</form>";

}

// le nom de la variable importe seulement lorsqu'on appelle notre fonction 
afficherRadio($nomsRadios);