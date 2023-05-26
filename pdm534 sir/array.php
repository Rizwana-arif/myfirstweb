<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array page</title>
</head>
<body>
    
<?php 


  //     $std= array ("ali","Raza",70,90,97,99,96);
  //     $c=count($std);
  //  $total=500;
  //  $ob=0;
  //     foreach($std as $val){
  //       if(gettype($val)=="integer"){
  //              $ob=$ob+$val;
  //              echo "<h1>".$val."</h1>";
  //       }else{
  //         echo "<h1>".$val."</h1>";
  //       }

      
  //     }

  //     echo "<h1>".$total."</h1>";
  //     echo "<h1>".$ob."</h1>";
  //     $per=round($ob/$total*100);
  //     echo "<h1>".$per."%</h1>";
  //     if($per>=90 && $per<=100){
  //       $r="A+";
  //    }
  //    elseif($per>=80 && $per<90){
  //       $r="A";
  //    }
  //      elseif($per>=70 && $per<80){
  //       $r="B";
  //    }
  //       elseif($per>=60 && $per<70){
  //       $r="C";
  //    }
  //       elseif($per>=44 && $per<60){
  //       $r="D";
  //    }else{
  //       $r="F";
  //    }
  //    echo "<h1>".$r."</h1>";
?>

<table cellpadding="15" cellspacing="15" border="2" style="background-color:black;color:white;" width="50%"  align="center" >
<tr>
  <th>Name</th>
  <th>Father name</th>
  <th>CLass</th>
  <th>English</th>
  <th>Urdu</th>
  <th>Math</th>
  <th>PS</th>
  <th>IS</th>
  <th>Total</th>
  <th>Obtain</th>
  <th>Percentage</th>
  <th>Result</th>
</tr>
<tr>
<?php 
    $std= array ("ali","Raza","BSCS",90,99,97,100,96);
    $c=count($std);
 $total=500;
 $ob=0;
    foreach($std as $val){
      if(gettype($val)=="integer"){
             $ob=$ob+$val;
             echo "<td>".$val."</td>";
      }else{
        echo "<td>".$val."</td>";
      }

    
    }

    echo "<td>".$total."</td>";
    echo "<td>".$ob."</td>";
   $per=round($ob/$total*100);
  echo "<td>".$per."%</td>";
    if($per>=90 && $per<=100){
      $r="A+";
   }
   elseif($per>=80 && $per<90){
      $r="A";
   }
     elseif($per>=70 && $per<80){
      $r="B";
   }
      elseif($per>=60 && $per<70){
      $r="C";
   }
      elseif($per>=44 && $per<60){
      $r="D";
   }else{
      $r="F";
   }
   echo "<td>".$r."</td>";
?>
</tr>
  </table>
</body>
</html>