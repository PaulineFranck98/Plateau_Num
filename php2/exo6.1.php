<?php

// affichage d'une liste déroulante contenant 3 options/choix -------------------------------


// tableau contenant mes différents éléments
$elements = ["Monsieur", "Madame","Mademoiselle"];

// déclaration de ma fonction avec en paramètre mon tableau $elements
function listeDeroulante($elements){

    // la balise html <select> encadre les balises <option> (ici on a 3 options)
    echo "<select>";
    
    foreach ($elements as $element) {
        // pour chaque élément, générer une option
        echo "<option>".$element."</option>";

    }
    // clôture ma balise <select> (liste déroulante)
    echo "</select>";

}

// appel de ma fonction
listeDeroulante($elements);


