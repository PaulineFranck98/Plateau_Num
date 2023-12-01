<h1>Exercice 9</h1>
<?php
// Déterminer si une personne est imposable en fonction de son âge, et de son sexe --------------------------------

$age = 21;
$sexe = "H";
$categorie = "";

// si c'est une femme ET que son âge et compris entre 18 et 35 ans 
// OU si c'est un homme ET que son âge est supérieur à 20 ans alors : imposable

if( $sexe == "F" && $age>=18 && $age<=35 || $sexe =="H" && $age>20){

    $categorie = "imposable";

} else {

    $categorie = "non imposable";
}

echo "Age = $age<br>";
echo "Sexe = $sexe<br>";
echo "La personne est $categorie.";

