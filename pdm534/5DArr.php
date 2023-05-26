<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            
            margin-left:auto;
            margin-right:auto;
            border-radius: 15px 5px 5px 5px;
            box-shadow: 20px 20px 20px #d6b5b5;
            }
        table th {
            background-color: rgb(214, 114, 97);
            color: black;
            text-align: center;
            font-weight: bold;
        }
        table th,
        table td{
            padding: 15px 20px;
        }
        table  tr{
            border-bottom: 1px solid #d6b5b5;
        }
        table  tr:nth-of-type(even){
            background-color: rgb(169, 219, 202);

        }
        .table  tr:last-of-type{
            border-bottom: 2px solid rgb(214, 114, 97);
        }
       

     </style>
</head>
<body>
    <table>
    <?php
        $std=array(
            "GCUF"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
            
                ),
                "M.Phil"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
            ),
            "Agri"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
                "IT"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
                "M.Phil"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
            ),
            "Superior"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
                "IT"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
                "M.Phil"=>array(
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
                    "SE" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    "Physics" =>array(
                        "rizwana"=>array("Ali","BSCS",88,99,99,66,55),
                        "noor"=>array("Raza","BSCS",88,69,44,66,55),
                        "freeha"=>array("Ahmed","BSCS",58,99,99,66,55),
                        "khadija"=>array("Ayan","BSCS",78,99,99,66,55),
                    ),
                    
                ),
            ),
        );
        $total=500;
        foreach($std as $key=>$val){
            echo "<tr>";
            echo "<th colspan=12><h1>University : $key</h1></th>";
            echo "</tr>";
            foreach($val as $dep=>$data){
                echo "<tr>";
                echo "<th colspan=12><h2>Department : $dep</h2></th>";
                echo "</tr>";
                foreach($data as $class=>$data2){
                    echo "<tr colspan=12>";
                    echo "<th colspan=12><h3>Class:$class</h3></th>";
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
                    foreach($data2 as $name=>$v){
                        echo "<tr>";
                        echo "<td>$name</td>";
                        $ob=0;
                        foreach($v as $datav){
                            if(gettype($datav)=="integer"){
                                $ob=$ob+$datav;
                                echo "<td>$datav</td>";
                            }
                            else{
                                echo "<td>$datav</td>";
                            }
                        }
                        echo "<td>$total</td>";
                        echo "<td>$ob</td>";
                        $per=round($ob/$total*100);
                        echo "<td>$per%</td>";
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
                         echo "<td>$r</td>";

                        echo "</tr>";
                    }
                }
            }
        }


    ?>
</table>
</body>
</html>