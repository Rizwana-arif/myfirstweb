
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-top:50px;
            /* margin-left:400px; */
            /* background-color:red; */
        }
        .outer-div{
            width:500px;
            height:300px;
            margin-top:300px;
             background-color:red; 
        }
        .inner{
            width:200px;
            height:70px;
           
            background-color:skyblue;
            margin-left:200px;
            /* margin-top:100px; */
            padding:50px;
            
        }
    </style>
</head>
<body>
    <div class="outer-div">
        <div class="inner">
            <h3>Result Of two numbers<br>
                <?php echo $r ?>
            </h3>
        </div>

    </div>

    <?php
$n1=12;
$n2=40;
$op="/";

switch($op){
case '+' :
    $r=$n1+$n2;
    
    break;
case '-' :
    $sub=$n1-$n2;
    echo "Subtraction is :  " . $sub;
    break;
case '*':
    $mul=$n1*$n2;
    echo "Multiplication is  :  " . $mul;
    break;
case '/' :
    $div=$n1/$n2;
    echo "Division is  :  " . $div;
    break;
case '%':
    $mod=$n1%$n2;
    echo "remainder is  :  " . $mod;
    break;
default:
    echo "Syntax error";
    break;
}
?>  

</body>
</html>




