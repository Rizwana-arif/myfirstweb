<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//          $arr=array(
//             "ali"=>23,
//             "humza"=>22,
//             "hina"=>21,
//             "iqra"=>25,
//             "Azam"=>18
//      );
// //      echo "<pre>";
// //      print_r($arr);
// //    echo "</pre>";
  
//     foreach($arr as $key=>$val){
//          echo "<h1>$key age is :".$val."</h1>";
//     }
$std=array(    
    "ali"=>array ("Raza","BSCS",90,99,47,90,56),
    "maaz"=>array ("ali","BSCS",70,89,57,80,46),
    "hina"=>array ("shahzad","BSCS",80,79,67,70,66),
    "Adeel"=>array ("akram","BSCS",90,69,77,60,76),
    "Azam"=>array ("shahzad","BSCS",60,59,87,50,86),
    "ayesha"=>array ("akram","BSCS",90,49,97,40,96),
    "zeshan"=>array ("akram","BSCS",49,58,47,46,49)
   );
        echo "<pre>";
     print_r($std);
   echo "</pre>";
    ?>
</body>
</html>