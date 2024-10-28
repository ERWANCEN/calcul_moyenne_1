<?php
// tableau fourni par l'énnoncé
$tabNotes = array('mathematiques' => 16 , 'français' => 13,'histoire' => 8 ,'géographique' => 6 ,'svt' => 17 ,'chimie' => 11);

// boucle pour afficher chaque matière et chaque note associée
foreach ($tabNotes as $matieres => $notes) { 
    // boucle foreach qui parcours le tableau "$tabNotes" en associant les clés principales du tableau à la variable "$matieres" à laquelle j'associe ses valeurs dans la variable "$notes"
    echo "Matière : " . ucfirst($matieres) . ", Note : {$notes} <br>";
    // j'affiche le nombre de phrase correspondant au nombre de lignes du tableau
    // à chaque ligne je souhaite afficher le nom de la matière avec sa première lettre en capital grâce à "ucfirst", ainsi que la note associée à la matière
};

// calcul moyenne
$moyenne = array_sum($tabNotes) / count($tabNotes);
// j'additionne toutes les notes ("array_sum()") que je divise ("/") par le nombre de matières ("count()") pour calculer la moyenne
echo "La moyenne des notes est : " . round($moyenne, 2) . "<br>";
// j'affiche donc la moyenne des notes arrondie au centième grâce à "round()"
// première valeur est la variable que je souhaite arrondir (ici "$moyenne")
// deuxième valeur est le nombre de chiffres après la virgule que je souhaite arrondir (ici je veux arrondir au centièmedonc : 2)