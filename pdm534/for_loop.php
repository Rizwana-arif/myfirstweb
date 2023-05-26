<?php
/*echo "<h3>list of even numbers </h3>" . "<br>";
for($i=1; $i<=40; $i++){
    if($i%2==0)
    {
        echo $i . "<br>";
    }
}*/


/*echo "<h3>list of odd numbers </h3>" . "<br>";
for($i=1; $i<=40; $i++){
    if($i%2!=0)
    {
        echo $i . "<br>";
    }
}*/


/* code to check wether the given year is a leap year*/

for($year=1980;$year<=2023; $year++){
    if($year%4==0){
        echo $year ."<br>";
   
}
}
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
  <table cellpadding="5" cellspacing="0" border='grey' width="300px">




<?php
$i=0;
while($i<=30){
    if($i %2==0){
        echo"<tr><td>$i</td><td>Even</td></tr>";
    }else{
       
        echo"<tr><td>$i</td><td>Odd</td></tr>";
         
    }
    $i++;
}
?>
</table>  
</body>
</html>