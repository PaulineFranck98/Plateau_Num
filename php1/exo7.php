<h1>Exercice 7</h1>
<?php
// Algo permettant de renvoyer la catégorie d'un enfant en fonction de son âge -------------------

$age = 7;
$categorie = "";



// if( $age>=6 && $age<=7){

//     $categorie = "Poussin";

// }else if ($age>=8 && $age<=9){

//     $categorie = "Pupille";

// }else if ($age>=10 && $age<=11){

//     $categorie = "Minime";

// }else if ($age>=12){

//     $categorie = "Cadet";

// } else {

//     $categorie = "";

// }

// Pour éviter les && inutiles, on organise les if en commençant par l'âge le plus élevé 

if($age>=12){

    $categorie = "Cadet";

}else if ($age>=10){

    $categorie = "Minime";

}else if ($age>=8){

    $categorie = "Pupille";


}else if ($age>=6){

    $categorie = "Poussin";

} else {

    $categorie = "";

}


// Méthode avec switch case --------------------------------------------------------------



switch (true){

    case ($age>=12):
        $categorie = "Cadet";
        break;
    
    case ($age>=10):
        $categorie = "Minime";
        break;

    case ($age>=8):
        $categorie = "Pupille";
        break;

    case ($age>=6):
        $categorie = "Poussin";
        break;

    default :
        $categorie = "";
        

}



echo "L'enfant qui a $age ans appartient à la catégorie « $categorie »";