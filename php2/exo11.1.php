<?php

// echo date("l j F Y")


// $timestamp = new DateTime($dateString);

$dateString = "2018-02-23";

// echo $timestamp;

// echo date("l j F Y", $timestamp);

//  var_dump($timestamp);
//  die; --> tue le script (ex ici : sous le var dump pour qu'il ne continue pas sa lecture)

function formaterDateFr($dateString){
    // tableau jours anglais
    $daysEng = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    // tableau jours français
    $daysFra = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

    // tableau mois anglais
    $monthsEng = ["January", "February", "March" , "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    // tableau mois français 
    $monthsFra = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre" , "Octobre" , "Novembre", "Décembre"]; 
    
    // convertit chaîne de caractères en temps
    $timestamp = strtotime($dateString);

    // remplacement des jours eng en jours fra dans date, il reste le mois à traduire
    $weekDayFra = str_replace($daysEng, $daysFra, date("l j F Y", $timestamp));

    // on remplace le mois dans $weekDayFra 
    // affichage de str_replace qui renvoie une chaîne de caractères
    echo str_replace($monthsEng, $monthsFra, $weekDayFra);
}

formaterDateFr($dateString);