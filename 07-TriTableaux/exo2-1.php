<?php

$nb = readline ("Nombre de valeurs que vous souhaitez enregistrer : ");
$tab = [];
$estVrai = true;

for ($i = 0 ; $i < $nb ; $i++){
    $saisie = readline ("valeur : ");
    $tab [$i] = $saisie;
}

while($estVrai){

    $estVrai = false;

    for ($i=0;$i<=count($tab)-2;$i++){

        if ($tab[$i] < $tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $estVrai = true;
        }

    }

}

foreach($tab as $valeur){
    echo $valeur . "\n";
}

?>