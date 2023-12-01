<h1>Exercice 14</h1>
<?php
// calculer l'âge exact d'une personne à partir d'une date de naissance--------------------


$dateNaissance = new DateTimeImmutable("1985-01-17");

$dateDuJour = new DateTimeImmutable("2018-05-21");


$interval = $dateNaissance->diff($dateDuJour);

echo $interval->format("%y ans %m mois %d jours");


// $dateNaissance est devenu un objet de la classe de DateTimeImmutable qu'on a instancié avec new NomDeLaClasse
// donne droit à l'objet $dateNaissance et $dateDuJour à utiliser les méthodes telles que diff et format