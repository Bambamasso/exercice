<?php
//  $expression=readline('entrer une expresssion arithmetique en format x, y, z :');
//  $elements=explode(" ", $expression,);

//  count($elements);

//  $x=readline('entrer le prémier entier');
//  $z=readline('entrer le prémier entier');
//  $resultat = $x + $z;
//  $convertir=(float)$resultat;

//  $convertir=round($resultat , 1);
//  echo $resultat;


function arithmetique( ){
    $operation= readline("entrer une operation arithmetique ");
   $resultat=explode(" ", $operation );
   print_r($resultat);
}
  
    
  arithmetique();
?>
