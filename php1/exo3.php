<h1>Exercice 3</h1>
<?php

// Instructions pour remplacer un mot dans une phrase -------------------------

$originalString = "Notre formation DL commence aujourd'hui";

// str_replace :(élément à remplacer, remplacement, dans quelle chaîne de caractère/où?)
$replaceString = str_replace("aujourd'hui","demain", $originalString);

echo "$replaceString<br>";
echo "$originalString<br>";