<?php 
    $std=array(    
     array ("ali","Raza","BSCS",90,99,97,100,96),
     array ("maaz","ali","BSCS",80,69,77,90,96),
     array ("ali","Raza","BSCS",90,99,97,100,96),
     array ("ali","Raza","BSCS",90,99,97,100,96),
     array ("ali","Raza","BSCS",90,99,97,100,96),
     array ("ali","Raza","BSCS",90,99,97,100,96)
    );
     foreach($std as $val){
        echo "<br/>";
         foreach($val as $data){
          echo "<h1>$data</h1>";
         }
     }
?>