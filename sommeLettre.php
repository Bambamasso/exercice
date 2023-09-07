<?php
function somme($nbr){
    $somme=str_split($nbr);
    $calcul=array_sum($somme);
    echo"La somme de $nbr est : ". $calcul;
}
echo somme('126');
?>