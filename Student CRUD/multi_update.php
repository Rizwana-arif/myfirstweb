<?php
include ("./connect.php");
$sid=$_GET['sid'];
     $sql="SELECT * FROM `stu-rec-multi` WHERE `sid`='$sid'";
     $run=mysqli_query($conn,$sql);
     $fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
$sname=mysqli_real_escape_string($conn,$_POST['sname']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$sadd=mysqli_real_escape_string($conn,$_POST['sadd']);
$smail=mysqli_real_escape_string($conn,$_POST['smail']);
$snic=mysqli_real_escape_string($conn,$_POST['snic']);
$sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
@$spic=$_FILES['spic']['name'];
if(!empty($spic[0])){
    foreach($spic as $p){
        $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
        $arr=array("png","jpg","jpeg");
        if(in_array($a,$arr)){
            $mymsg="right";
        }else{
            $mymsg="invalid";
           }
    }
    if($mymsg=="right"){
        $dpic=unserialize($fet['spic']);
        foreach($dpic as $key=>$p){
            unlink("./pictures/".$p);
         }
    }
    if($mymsg=="right"){

        $pi=serialize($spic);
     $sql="UPDATE `stu-rec-multi` SET `sname`='$sname',`fname`='$fname',`sadd`='$sadd',`smail`='$smail',`snic`='$snic',`sgen`='$sgen',`spic`='$pi' WHERE `sid`='$sid'";

         $run=mysqli_query($conn,$sql);
         if($run){
          foreach($spic as $key=>$p){
             move_uploaded_file($_FILES['spic']['tmp_name'][$key],"./pictures/".$p);
          }
             $msg="Data has been Updated";
             header("Refresh:2, url=./stu_multi_select.php");
         }else{
           $msg="Data has not been updated";
         }

     }else{
         $msg="Your imgs is not right";
     }
 }else{
    $pi=$fet['spic'];
    $sql="UPDATE `stu-rec-multi` SET `sname`='$sname',`fname`='$fname',`sadd`='$sadd',`smail`='$smail',`snic`='$snic',`sgen`='$sgen',`spic`='$pi' WHERE `sid`='$sid'";
    $run=mysqli_query($conn,$sql);
    if($run){
        header("Refresh:2, url=./stu_multi_select.php");
        $msg="Data has been Updated but img is not right";
    }else{
        $msg="Data has not been updated";
      }
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styling.css" type="text/css"/>
</head>
<body>
    <div class="main">
        <div class="register">
            <h1><?php echo @$msg; ?></h1>
            <h1>Register Here</h1>
            <form  id="register" method="post" enctype="multipart/form-data">
                <label>Student Name : </label>
            </br>
                <input id="name" type="text" name="sname" value="<?php echo $fet['sname'] ?>" placeholder="Enter your good name" />
            </br> 
                <label>Father Name : </label>
            </br>
                <input id="name" type="text" name="fname" value="<?php echo $fet['fname'] ?>" placeholder="Your father name?"/>
            </br>
                <label>Address : </label>
            </br>
                <input id="name"  type="text" name="sadd" value="<?php echo $fet['sadd'] ?>" placeholder="Address plz"/>
            </br>
                <label>Email : </label>
            </br>
                <input id="name" type="text" name="smail" value="<?php echo $fet['smail'] ?>" placeholder="write your enail"/>
            </br>
               <!--<label>Mobile No.</label>
            </br>
                <input id="name" type="text" name="smob" placeholder="Mobile no. plz"/>
            </br>
                <label>Age : </label>
            </br>
                <input id="name" type="numbers" name="sage" placeholder="How old are u?" />
            </br> -->
                <label>CNIC</label>
            </br>
                <input id="name" type="text" name="snic" value="<?php echo $fet['snic'] ?>" placeholder="Enter your id card no."/>
            </br>
            <?php 
       if($fet['sgen']=="male"){
         $m="checked";
       }else{
        $f="checked";
       }
    ?>
                <label>Gender</label>
            </br>
                <input type="radio" name="sgen" <?php echo @$m; ?> value="male"/>Male
                <input type="radio" name="sgen" <?php echo @$f; ?> value="female" />Female
            </br>
                <input id="file" type="file" multiple name="spic[]" />
            </br></br>
                <input id="sub" type="submit" name="sub" value="Update" />
            </form>
        </div>
    </div>
</body>
</html>