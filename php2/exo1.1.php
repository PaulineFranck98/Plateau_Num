<?php

// Convertir une chaîne de caractères en MAJ et en rouge ------------------------


// déclaration de ma fonction avec $texte en paramètre
function convertirMajRouge ($texte){

    // strtoupper permet de mettre la chaîne de caractères en maj sans prendre en compte les caractères accentués
    // mb_strtoupper permet de mettre la chaîne de caractères en maj en prenant en compte les caractères accentués
    $texte = mb_strtoupper($texte);
    
    // on injecte directement du style css dans les balise html qui encadre mon texte
    echo "<span style = 'color:red;'>$texte</span>";

}

$texte = "Mon texte en paramètre";


convertirMajRouge($texte);

// on peut également changer le style avec une classe css
