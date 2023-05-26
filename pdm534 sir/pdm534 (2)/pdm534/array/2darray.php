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
    $std=array(    
     array ("ali","Raza","BSCS",90,99,47,90,56),
     array ("maaz","ali","BSCS",70,89,57,80,46),
     array ("hina","shahzad","BSCS",80,79,67,70,66),
     array ("Adeel","akram","BSCS",90,69,77,60,76),
     array ("Azam","shahzad","BSCS",60,59,87,50,86),
     array ("ayesha","akram","BSCS",90,49,97,40,96),
     array ("zeshan","akram","BSCS",49,58,47,46,49)
    );

    $total=500;
     foreach($std as $val){
        echo "<tr>";
        $ob=0;
     
         foreach($val as $data){
            if(gettype($data)=="integer"){
                $ob=$ob+$data;
                echo "<td>".$data."</td>";
         }else{
           echo "<td>".$data."</td>";
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
echo "</tr>";
     }
?>
    </table>
</body>

</html>