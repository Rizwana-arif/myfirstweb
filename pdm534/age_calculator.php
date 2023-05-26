
<?php
 if(isset($_POST['sub'])){
    $dob=$_POST['dob'];
    $current=$_POST['current'];
    //function for age calculator

    $age=date_diff(date_create($dob),date_create($current));
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: grey;
        }
        
        div {
            border: 5px outset red;
            background-color: lightblue;
            text-align: center;
            height : 150px;
            width : 300px;
            margin-top: 100px;
            margin-left: 500px;
            padding-top:80px;


        }
        form input {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1 align=center>AGE CALCULATOR</h1>
<div >
<form action="" method="post">
    <label>Date Of Birth : </label>
    <input type="date" name="dob"/> <br>
    <label>Current Date  : </label>
    <input type="date" name="current"/><br>
    <input type="submit" name="sub" value="calculate"/>
    <br>
    <?php
    echo "<h3>Your Age is  : " . @$age->y . "</h3>";
    ?>
    
</form>
</div>
</body>
</html>
