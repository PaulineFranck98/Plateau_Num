<h1>Exercice 4</h1>
<?php

// Vérification si une phrase/chaîne de caractères est un palindrome -----------------------------------------------


$orignalString = "Engage le jeu que je le gagne";

// $stringNoSpace = str_replace($searchString--> "  ", $replaceString --> "",$orignalString);
// les espaces doivent être supprimés, on remplace alors les espaces " " avec str_replace par "" pour les supprimer
$stringNoSpace = str_replace(" ", "", $orignalString);


// strrev permet d'inverser la chaîne de caractère
// $phraseInverse = strrev("Engage le jeu que je le gagne");
$stringNoSpaceReverse = str_replace(" ", "", strrev($orignalString));

// on supprime les majuscules pour pouvoir comparer nos chaînes de caractères avec strtolower
$finalString = strtolower($stringNoSpaceReverse);

$string = strtolower($stringNoSpace);

// on compare si les 2 chaînes de caractères ont la même valeur, si true alors palindrome, sinon pas un palindrome
if($finalString == $string){
    echo "La phrase « $orignalString » est un palindrome";
} else {
    echo "La phrase « $orignalString » n'est pas un palindrome";
    
}

//  --> supprimer les espaces
//  --> inverser la chaîne de caractères
//  --> supprimer les majuscules
//  --> comparer les deux avec ==

