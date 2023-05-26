<?php 
    
     function abc($a=0){
        echo "<h1>my first function $a</h1>";
     }


   function add($a=0,$b=0){
        $c=$a+$b;
        $f="You sum value:".$c;
        return $f;
   }

   function grade($myper=0){
      if($myper>=90 && $myper<=100){
         $r="A+";
      }
      elseif($myper>=80 && $myper<90){
         $r="A";
      }
        elseif($myper>=70 && $myper<80){
         $r="B";
      }
         elseif($myper>=60 && $myper<70){
         $r="C";
      }
         elseif($myper>=44 && $myper<60){
         $r="D";
      }else{
         $r="F";
      }

      return $r;
   }
   
?>

