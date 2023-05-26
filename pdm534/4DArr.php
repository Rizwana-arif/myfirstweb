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
    <table border="2px" cellspacing=0 cellpadding=2px align=center>
<?php
$std=array(
    "BS"=>array(
        "CS" =>array(
            "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
            "noor"=>array("Raza","BSCS",88,69,44,66,55),
            "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
            "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
        ),
        "IT" =>array(
            "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
            "noor"=>array("Raza","BSCS",88,69,44,66,55),
            "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
            "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
        ),
        "Eng" =>array(
            "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
            "noor"=>array("Raza","BSCS",88,69,44,66,55),
            "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
            "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
        ),
    ),
    "MSC"=>array(
        "CS" =>array(
            "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
            "noor"=>array("Raza","BSCS",88,69,44,66,55),
            "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
            "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
        ),
        "IT" =>array(
            "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
            "noor"=>array("Raza","BSCS",88,69,44,66,55),
            "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
            "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
        ),
        "Eng" =>array(
            "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
            "noor"=>array("Raza","BSCS",88,69,44,66,55),
            "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
            "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
        ),

    ),
);

$total=500;
foreach($std as $key=>$val){
    echo "<tr>";
    echo "<th colspan='12'><h1>Department: $key </h1></th>";
    echo "</tr>";
  foreach($val as $class=>$data){
    echo "<tr>";
    echo "<th colspan='12'><h3>Class: $class </h3></th>";
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
                <th>Grades</th>
            </tr>
  <?php  
          
  foreach($data as $name=>$data2){
    echo "<tr>";
    echo "<td>".$name."</td>";
  
  $ob=0;
  foreach($data2 as $v)
  {
    if(gettype($v)=="integer"){
        $ob=$ob+$v;
        echo"<td>$v</td>";
    }else{
    echo"<td>$v</td>";
    }
}
    echo "<td>$total</td>";
    echo "<td>$ob</td>";
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