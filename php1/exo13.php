<h1>Exercice 13</h1>
<?php

// calculer une moyenne à partir de notes dans un tableau ------------------------------ 

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenneNotes = round($sommeNotes / $nbNotes, 2 );

// Pour afficher chaque note à la suite de l'autre :
// On écrit <nbNotes, car la première note a un indice 0 et non 1
echo "Les notes obtenues par l'éleve sont :";
for ($i=0; $i < $nbNotes; $i++) { 
    echo $notes[$i]." ";
}
echo "<br>";
echo "Sa moyenne générale est donc de $moyenneNotes";