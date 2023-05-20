<?php
include("./connect.php");
date_default_timezone_set("asia/karachi");
$y=date("y");
$m=date("m");
$d=date("d");
$date=$d."/".$m."/".$y;
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
    <style>
        body{
            background-color: rgb(119, 47, 62);
            background-size: cover;
            

        }
        .main{
            margin-left:40% ;
            margin-top: 200px;
            width:250px;
            height: 250px;
            background-color: aqua;
            padding: 40px 30px;

           }
     .input{
            padding-bottom: 9px;

    }
    </style>
</head>
<body>
    
    <div class="main">
        <form method="post">
            <h3><?php echo @$msg; ?></h3>
            <h2>ENTER CLASS TIME</h2>
           <div class="input"> <label>Select Time</label>
            <input type="time" name="ctime" />
            </div>
            <div class="input">
                <label>Date</label>
            <input type="text" name="cdate" value="<?php echo $date; ?>" readonly/>
                </div>
           <div class="btn"> <input type="submit" name="sub" value="submit" /></div>
        </form>
    </div>
</body>
</html>