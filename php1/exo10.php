<h1>Exercice 10</h1>
<?php

// afficher un rendu de monnaie en nombre de billet de 10€ et 5€, pièces de 2€ et 1€ -----------------------------

$montantAPayer = 152;
$montantVerse = 200;
$rendu = $montantVerse - $montantAPayer;
$nbBilletDix = 0;
$nbBilletCinq = 0;
$nbPieceDeux = 0;
$nbPieceUn = 0;

echo "Montant à payer : $montantAPayer €<br>";
echo "Montant versé : $montantVerse €<br> ";
echo "Reste à payer : $rendu €<br>";


while ($rendu >= 10) {
    $nbBilletDix++; 
    $rendu -= 10;
}

while ($rendu >= 5) {
    $nbBilletCinq++; 
    $rendu -= 5;
}
while ($rendu >= 2) {
    $nbPieceDeux++; 
    $rendu -= 2;
}
// while ($rendu >= 1) {
//     $nbPieceUn++; 
//     $rendu -= 1;
// }

echo "*****************************************<br>";
echo "Rendu de monnaie :<br>";
echo "$nbBilletDix billets de 10€ ~ $nbBilletCinq billet de 5€ ~ $nbPieceDeux pièce de 2€ ~ $rendu pièce de 1€";