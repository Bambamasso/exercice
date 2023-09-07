<?php
function croissante($table=[]){
    sort($table);
 foreach($table as $value){
print_r ($value); 
 }
} croissante([1 , 9 , 2, 0, 22, 3, 10, 12, ]);
?>