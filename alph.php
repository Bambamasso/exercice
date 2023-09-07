<?php
function alpha($lettre){
 $position = range('a','z');
$range=array_search($lettre, $position);
$range+=1;
 echo "la lettre  $lettre se trouve a la posion  $range dans alphabet français";

}
alpha('z');

 








?>
