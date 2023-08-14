<?php
$fixe=10 ; 
$nb=readline("entrer un nombre svp! ");
while($nb < $fixe){
echo'Vous avez entré '.$nb.'.La valeur rechercher est plus grande'."\n";
$nb=readline(" entrer un nombre svp! ");
}
  
while($nb > $fixe){
    echo'Vous avez entré '.$nb.'.La valeur rechercher est plus pétite'."\n";
    $nb=readline(" entrer un nombre svp! ");
    }
if( $nb = $fixe) {
    echo'Félicitation vous evez trouvé le nombre mystère qui est '.$fixe ;
}

?>