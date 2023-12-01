<?php
// Affichage formulaire complet :

// affichage champ de texte :
// nom, prénom, e-mail, ville, 
// sexe
// liste de choix "intitulé de formation":
// "développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"
// bouton submit 

// affichage formulaire html avec champs d'entrée type texte ----------------------------------------------------------------

$informations = ["Nom", "Prénom", "E-mail", "Ville"];


function afficherInformations($informations){

    echo "<form>";

    foreach ($informations as $information) {

        if($information == "E-mail"){

            echo "<label>".$information."</label><br><input type='email'style=padding:3px; placeholder=$information ><br>";

        }else {
        
        echo "<label>".$information."</label><br><input type='text' style=padding:3px; placeholder=$information><br>";

        }

    }
}

afficherInformations($informations);

// Formulaire html avec bouton radio choisir le genre (choix unique, donc radio et non checkbox) --------------------------------------------------------------------------

$genres = ["Masculin", "Féminin", "Autre"];

function afficherListeGenre ($genres){

    echo "<form>",
    "<fieldset style= width:180px;height:auto;padding-bottom:20px;margin-top:15px>",
    "<legend>Sélectionnez votre genre :</legend><br>";

    foreach ($genres as $genre) {

        echo "<input type='radio'name='genre'><label for='genre'>".$genre."</label><br>";

    } 
    echo "</fieldset>",
    "</form>";

}

afficherListeGenre ($genres);


// affichage Liste de choix avec liste déroulante pour choisir un intitulé de formation  ----------------------------------
// "développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"


$formations = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

function afficherListeFormations($formations){

    echo "<label>Sélectionnez une formation : </label>",
    "<select>";

    foreach ($formations as $formation) {
        echo "<option>".$formation."</option>";
    }

    echo "</select><br>";
}

afficherListeFormations($formations);

echo "<input type=submit style=margin-top:10px>";