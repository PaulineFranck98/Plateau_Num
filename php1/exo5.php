<h1>Exercice 5</h1>
<?php

// Algorithme qui déclare une valeur en francs et la convertit en € ---------------------------------------


$montantEnFrancs = 100;

// round permet d'arrondir un chiffre, ici on l'arrondi à 2 chiffres après la virgule
$montantEnEuros = round($montantEnFrancs / 6.56, 2);

echo "Montant en francs =". $montantEnFrancs."<br>";
echo "$montantEnFrancs francs = $montantEnEuros €";