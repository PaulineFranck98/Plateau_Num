<?php

// Répétition d'une image plusieurs fois (n nombre de fois)--------------------------------

$url = "http://my.mobirise.com/data/userpic/764.jpg";

$nb = 4;

// déclaration de ma fonction avec 2 paramètres : url affichant mon image 
function repeterImage ($lien, $nombre){

    echo "<div style='display:flex'>";

    for ($i=0; $i < $nombre; $i++) { 
        echo "<figure style='margin:0'><img src=".$lien."></figure>";   
    }
    echo "</div>";
}

repeterImage ($url, $nb);
repeterImage ($url, 10);
