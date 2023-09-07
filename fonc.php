<?php
$fixe = rand(0 , 10);
  $tentative = 0; 
  $nombre = readline("entrer un nombre : ");
  
  while($nombre < $fixe){
    echo'Vous avez entré '.$nombre.'.La valeur rechercher est plus grande'."\n";
    $nombre=readline(" entrer un nombre ! ");
    }
     
    while($nombre > $fixe){
        echo'Vous avez entré '.$nombre.'.La valeur rechercher est plus pétite'."\n";
        $nombre=readline(" entrer un nombre svp! ");
        }
    
        for( $tentative = 0 ; $nombre != $fixe ; $tentative++){  
        }
       
        if ( $nombre == $fixe) {
            echo'Félicitation vous evez trouvé le nombre mystère qui est '.$fixe ;
        }

       while($tentative = 3 ){

        echo'xx Désolé, après trois tentatives vous n\'avez pas réusi. Le nombre à deviner était'.$fixe;
       }
1 


?>