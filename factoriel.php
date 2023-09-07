<?php
  function factoriel($nb){
    $nombr=1;
    for($i=1 ;$i<=$nb; $i++){
        $nombr *= $i; 
    }echo "la factoriel de $nb est: ".$nombr;  
  }
   factoriel(20) ; 
?>