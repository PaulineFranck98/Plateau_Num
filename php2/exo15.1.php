<?php

//  Vérifier si une adresse e-mail a le bon format ----------------------------------------------

//  il existe 2 moyens de filtre : validation et nettoyage :
// La Validation :  
// sert à vérifier si une donnée passe certains critères. Par exemple, passer les critères de FILTER_VALIDATE_EMAIL va déterminer si une donnée est une adresse courriel valide, mais ne va pas modifier la donnée elle-même.

// Le nettoyage :   
// va nettoyer les données ; par exemple en retirant les caractères indésirables. Par exemple, passer une donnée à FILTER_SANITIZE_EMAIL va faire disparaître les caractères inappropriés dans une adresse courriel. D'un autre coté, la donnée n'est pas validée.


// on va utiliser le moyen de validation 

// variable à vérifier
// $email = "elan@elan-formation.fr";
$email = "contact@elan.fr";

// validation ou non de l'adresse e-mail
// filter_var : filtre une variable avec un filtre spécifique 

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    echo "L'adresse ".$email." est une adresse e-mail valide.";
    
}else {
    
    echo "L'adresse ".$email." n'est pas une adresse e-mail valide.";
}

