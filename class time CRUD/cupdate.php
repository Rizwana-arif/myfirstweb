<?php
include ("./connect.php");
$ctid=$_GET['ctid'];
     $sql="SELECT * FROM `class` WHERE `ctid`='$ctid'";
     $run=mysqli_query($conn,$sql);
     $fet=mysqli_fetch_assoc($run);
     if(isset($_POST['sub'])){
        $ctime=mysqli_real_escape_string($conn,$_POST['ctime']);
        $cdate=mysqli_real_escape_string($conn,$_POST['cdate']);
        $sql="UPDATE `class` SET `ctime`='$ctime',`cdate`='$cdate' Where `ctid`='$ctid'";
        $run=mysqli_query($conn,$sql);
        if($run){
           
               $msg="Data has been Updated";
               header("Refresh:2, url=./classview.php");
           }else{
             $msg="Data has not been updated";
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
            <input type="time" name="ctime" value="<?php echo $fet['ctime']; ?>" />
            </div>
            <div class="input">
                <label>Date</label>
            <input type="text" name="cdate" value="<?php echo $fet['cdate']; ?>" readonly/>
                </div>
           <div class="btn"> <input type="submit" name="sub" value="Update" /></div>
        </form>
    </div>
</body>
</html>