<?php 
  include('./function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table cellpadding="15" cellspacing="15" border="2" style="background-color:black;color:white;" width="50%"
        align="center">
        <?php 
$std=array(    
    "BS"=>array(
           "CS"=>array(
            "ali"=>array ("Raza","BSCS",90,99,47,90,56),
            "maaz"=>array ("ali","BSCS",70,89,57,80,46),
            "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
            "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
            "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
            "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
            "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
           ),
           "IT"=>array(
            "ali"=>array ("Raza","BSCS",90,99,47,90,56),
            "maaz"=>array ("ali","BSCS",70,89,57,80,46),
            "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
            "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
            "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
            "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
            "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
           ),
           "eng"=>array(
            "ali"=>array ("Raza","BSCS",90,99,47,90,56),
            "maaz"=>array ("ali","BSCS",70,89,57,80,46),
            "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
            "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
            "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
            "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
            "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
           ),
    ),
    "MSC"=>array(
        "CS"=>array(
         "ali"=>array ("Raza","BSCS",90,99,47,90,56),
         "maaz"=>array ("ali","BSCS",70,89,57,80,46),
         "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
         "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
         "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
         "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
         "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
        ),
        "IT"=>array(
         "ali"=>array ("Raza","BSCS",90,99,47,90,56),
         "maaz"=>array ("ali","BSCS",70,89,57,80,46),
         "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
         "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
         "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
         "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
         "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
        ),
        "eng"=>array(
         "ali"=>array ("Raza","BSCS",90,99,47,90,56),
         "maaz"=>array ("ali","BSCS",70,89,57,80,46),
         "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
         "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
         "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
         "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
         "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
        ),
 )
   );
    
    $total=500;
     foreach($std as $key=>$val){
     echo "<tr>";
echo "<th colspan='12'><h1>Darpartment:$key</h1></th>";
echo "</tr>";
         foreach($val as $class=>$data){
            echo "<tr>";
            echo "<th colspan='12'><h2>Class:$class</h2></th>";
            echo "</tr>";
            ?>
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
<?php
             foreach($data as $name=>$data2){
   
        echo "<tr>";
        echo "<td>".$name."</td>";
        $ob=0;
     
        foreach($data2 as $v){
           if(gettype($v)=="integer"){
               $ob=$ob+$v;
               echo "<td>".$v."</td>";
        }else{
          echo "<td>".$v."</td>";
        }
  
        }
        echo "<td>".$total."</td>";
        echo "<td>".$ob."</td>";
        $per=round($ob/$total*100);
        echo "<td>".$per."%</td>";
    $r=grade($per);
        echo "<td>".$r."</td>";
        echo "</tr>";
             }
         }

     }
?>
    </table>
</body>

</html>