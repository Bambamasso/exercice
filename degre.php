<?php 
function conversion($celsus){
 $fahrenheit = $celsus * 1.8 + 32;
return $fahrenheit.' T°F';
}
echo conversion(20);
?>