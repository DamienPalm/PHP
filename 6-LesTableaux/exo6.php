<?php

$nb = readline ("Nombre de valeurs que vous souhaitez enregistrer : ");
$note = [];
$noteSup = 0;
for ($i = 1 ; $i <= $nb ; $i++){
    $saisie = readline ("note : ");
    $note [$i] = $saisie;
}

$moy = array_sum($note) / count($note);


for ($i = 1 ; $i <= count ($note) ; $i++){
    if($moy < $note[$i]){
        $noteSup++;
    }
}
echo "Le nombre de note au-dessus à la moyenne est : " . $notePositive;
 
?>