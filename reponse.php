<?php
        function reponse(){
            $demande=readline("Quelle est la réponse à la question de la vie,de l'univers et de tou? ");
    
            if($demande=='42' || $demande=='quarante-deux' ||$demande=='quarante deux' || $demande=='quaRante' ){
               echo "oui";
            }
       
            else {
               echo"Non";
            }
       
        }
        reponse();
   
    

   
     

  
   
     