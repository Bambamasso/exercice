<?php
   function voyelle(){
    $text=readline('enter le mot que vous voulez ');
    $voyell=['A','E','U','I','O','V','a','o','i','u','v','e'];
       $maj=str_replace($voyell,'',$text);
       echo $maj;
   }

   voyelle();

  
?>