<!-- télécharger laragon -->

<h1>Introduction PHP</h1>
<!-- Algo : suite d'instructions qui vont être organisées de différentes façons :
séquencielle : permet d'exécuter les instructions les unes à la suite des autres
procédurale: fonctions, on va créer des fonctions qui pourront être appelées quand on le veut, et stockées où on le veut 
-fonctions natives : documentées dans php
-fonctions créées par nous-mêmes

--PHP = langage faiblement typé : pas obligé de préciser le type;


-->
<?php

//DECLARATION DE VARIABLES ------------------------------------

// variable : emplacement dans lequel on va stocker une valeur
$chaineDeCaracteres = "Mon texte"; // = string
$chaineDeCaracteres2 = "Mon prix est très intéressant";
$chaineDeCaracteres3 = "Mon prix est de";

// = integer
$entier = 50; 
// = float, nombre avec décimales : attention on met un point
$flottant = 9.99; 

//boolean = true ou false
$boolean = true; 

// on peut y mettre différents types de valeurs (string, etc.)
// ancienne façon : array()
$tableau1 = array("texte 1", "texte 2", "texte 3");
// façon actuelle : []
$tableau2 = ["texte 1", "texte 2"];

// Programmation orientée objet (POO)
// Objets natifs comme : DateTime (classe native)
//New + ... = on instencie un objet de la classe date, on va pouvoir accéder à des fonctions qui vont nous permettre de faire des calculs de dates, etc
$date = new DateTime();


 //AFFICHAGE-------------------------------------------------
 echo "Test<br>"; //<br> car les deux lignes se succèdent sinon
 echo "<h3>Test</h3>";

// concaténation : 
 echo $chaineDeCaracteres."<br>";
 echo $chaineDeCaracteres2."<br>";
// on concatène avec un point.

// affiche : mon prix est de 50€
 echo $chaineDeCaracteres3." ".$entier." euros<br>";
// autre manière : (fonctionne uniquement avec des variables)
 echo "$chaineDeCaracteres3 $entier euros<br>";
//  on déclare d'abord les variables, puis on les exploite :
// lecture séquentielle de haut en bas


// FONCTIONS CHAINES DE CARACTERES-----------------------------


// Compter le nombre de caractères :

// str = string, len = length --> calcule taille chaîne de caractères : espaces comptabilisés
$nbCaracteres = strlen($chaineDeCaracteres);
// strlen(string $string): int
// le paramètre doit être une chaîne de caractères et renvoie un nombre entier
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres).
" caractères<br>";


// Convertir une chaîne en majuscules :

//(str to upper)
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
// les caractères accentués ne sont pas mises en maj
echo strtoupper($chaineDeCaracteres2)."<br>";
// predn en compte les caractères accentués :
// favoriser cette fonction
echo mb_strtoupper($chaineDeCaracteres2)."<br>";


// Compter le nombre de mots : 
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

// FONCTIONS SUR LES TABLEAUX------------------------------
// Pour compter le nombre d'éléments dans un tableau
$tailleTableau1 = count($tableau1);
echo "Le tableau 1 contient $tailleTableau1 élements<br>";
echo "Le tableau 2 contient ".count($tableau2). " éléments<br>";

// Pour récupérer le premier élément de mon tableau
// premier élément = indice 0 comme JS
// accéder à la première valeur du tableau
echo $tableau1[0]."<br>";

// si j'avais dit : echo $tableau[3], donc le 4e élément :
// l'erreur dit : offset : en dehors du tableau
// aller sur Stackoverflow pour les erreurs

// Mise en pratique avec un tableau qui contient les notes d'un élève et on veut en faire la moyenne :

$notes = [12,14,9,8,19, 17.25];
// on a besoin de la somme des notes, et du nombre de notes, puis de diviser

$nbNotes = count($notes);
// array = tableau, sum= somme
$sommeNotes = array_sum($notes);
echo $nbNotes."<br>";
echo $sommeNotes."<br>";

$moyenne = $sommeNotes / $nbNotes;
echo "La moyenne de l'élève est $moyenne<br>";

// on indique dans cette fonction le nombre qu'on veut  arrondir, le nb de décimales, permet d'espacer les gros nombres (espaces ou virugles) 
// $moyenne2 = number_format();

// Arrondir à 2 chiffres après la virgule
$moyenne = round($sommeNotes / $nbNotes, 2);
echo "La moyenne de l'élève est $moyenne<br>";


//OPERATIONS MATHEMATQIUES---------------------------------
$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";


// Afficher total TTC :

// notation décimale pour les pourcentages, et non "20%"
$tauxTVA = 0.20; 
// version développée
$totalTTC = $totalHT + $totalHT * $tauxTVA;
echo "Le total TTC est de $totalTTC €<br>";

// 1 s'interprète comme 100% du prix
// versoin factorisée
$totalTTC1 = $totalHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC1 €<br>";

// Donne le type de la valeur 
// ici : integer, donc nombre entier
// double si nombre à virgule
echo gettype($nbArticles)."<br>";

// exemple ici : array
echo gettype($tableau1)."<br>";

// souvent utilisé pour les tableaux
// console.log en JS
//  var_dump($tableau1);



//  STRUCTURES DE CONTROLE ---------------------------------

// boucle : plusieurs types de boucles existent : si on veut ressortir les éléments d'un tableau on fait une boucle dessus : 
// boucler = parcourir le tableau (ex) pour en ressortir les différents éléments


// Conditions : (IF = SI)
// permet de tester quelque chose : on indique dans les parenthèses ce qu'on veut vérifier

$prenom = "Georges";
$age = 18;

if($age <18){
    $resultat = "mineur";
}else{
    $resultat = "majeur";
}

echo "$prenom est $resultat<br>";



 

