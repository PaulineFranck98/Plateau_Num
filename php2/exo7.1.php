<?php
// affichage formulaire html de type = checkbox ave une case pré-cochée ----------------------

// tableau contenant mes éléments sous forme : clé, valeur (ici valeur booléenne : true/false)
$elements = ["choix 1" => false,
             "choix 2" => false,
             "choix 3" => 'checked'
            ];


function genererCheckbox ($elements){

    echo "<form>";

    foreach ($elements as $element => $boolean) {
        // opérateur ternaire 
        // la variable $check prend la valeur "checked" si la condition est true ou reste vide si c'est false
        //  $check= $boolean ? "checked":"";

        // affichage du libellé devant/avant mon input 
        echo "<label>".$element."</label>";

        //affichage des mes input de type=checkbox, avec la variable $check qui pré-cochera une case si sa valeur booléenne est true 
        echo "<input type='checkbox' $boolean ><br>";
    }

    echo "</form>";
}

// appel de ma fonction
genererCheckbox($elements);

