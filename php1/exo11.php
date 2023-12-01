<h1>Exercice 11</h1>

<?php
// algo permettant de parcourir un tableau et afficher le contenu----------------


$marques = ["Peugeot","Renault","BMW","Mercedes"];

// count($tableau) compte le nombre d'éléments dans un tableau,ici le nb de marques
$nbMarques = count($marques);


    echo "<ul>";
        // <!-- ouverture de la balise php dans <ul> pour intégrer foreach -->

        foreach ($marques as $marque) {

            // affiche mon élément dans une liste à puces
            echo "<li>".$marque."</li>";

    }
        //fermeture 
    
    echo "</ul>"
    ?>



