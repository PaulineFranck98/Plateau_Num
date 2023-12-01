<?php
//  affichage d'un formaulire html avec 3 champs d'entrée de type texte ---------------------------------------------------

// tableau contenant mes différents éléments
$nomsInput = ["Nom", "Prénom" , "Ville"];

// déclaration de ma fonction avec mon tableau $nopmsInput en paramètre pour afficher le formulaire
function afficherInput($nomsInput){

   echo "<form>";

   // pour chaque élément dans le tableau...
   foreach ($nomsInput as $nomInput) {

      // affichage du libellé du champs de texte suivi du champs de texte 
      echo "<label>".$nomInput."</label><br><input name=".$nomInput. "id=".$nomInput."type='text'/><br>";

   }

   echo"</form>";

}

// appel de ma fonction
afficherInput($nomsInput);