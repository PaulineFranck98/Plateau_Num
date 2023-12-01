<h1>Exercice 6</h1>
<?php
// Calculer montant d'une facture à partir du prix HT et de la quantité---------------------------

$prixUnitaire = 9.99;
$quantite = 5;
$tauxTVA = 0.2;

$prixTotalHT = $prixUnitaire * $quantite;
$prixTotalTTC = $prixTotalHT * (1 + $tauxTVA);

echo "Prix unitaire de l'article : $prixUnitaire €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de : $prixTotalTTC €.";