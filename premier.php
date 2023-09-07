<?php
// $number=24;
// switch($number){
//  case 54:
//     echo "is it 34";
//     break;
//     case 37:
//     echo "it it 37";
//     break;
//     case 35:
//     echo "it is 35";
//     break;
//     case 24:
//     echo "it is 24";
//     break;
//     default:
//     echo "we could not fid ";
// }
function NombrePremier($nbr){
 for($i=1 ; $i<=$nbr/2; $i++){
 if($nbr % $i==0 ){
    echo "nombre premier";
}
 }
}
 NombrePremier(10);
?>