<?php
include("./connect.php"); 
if(isset($_POST['sub'])){
    $ctime=mysqli_real_escape_string($conn,$_POST['ctime']);
    $cdate=mysqli_real_escape_string($conn,$_POST['cdate']);
    $sql="INSERT INTO `class`(`ctime`,`cdate`) VALUES ('$ctime','$cdate')";
    $run=mysqli_query($conn,$sql);
    if($run){
        $msg="your data is inserted";
    }
    else{
        $msg="invalid";
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
<h2><?php echo @$msg ; ?></h2>
    <form method=post>
        <label>slect time</label>
        <input type="time" name="ctime" />
</br>
        <input type="date" name="cdate" />
</br>
        <input type="submit" name="sub" value="submit" />
</form>
</body>
</html>