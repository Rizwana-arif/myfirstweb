<?php
include ("./connect.php");
$teaid=$_GET['teaid'];
$sql="SELECT * FROM `teac-rec-single` WHERE `teaid`='$teaid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $degree=mysqli_real_escape_string($conn,$_POST['degree']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $gen=mysqli_real_escape_string($conn,$_POST['gen']);
    $exp=mysqli_real_escape_string($conn,$_POST['exp']);
    @$pic=mysqli_real_escape_string($conn,$_FILES['pic']['name']);
    if(!empty($pic)){
        $a=strtolower(pathinfo($pic,PATHINFO_EXTENSION));
        $arr=array("png","jpg","jpeg");
        if(in_array($a,$arr)){
            unlink("./pictures/".$fet['pic']);
            $pi=rand(10000,90000).".".$a;
            $sql="UPDATE `teac-rec-single` SET `fname`='$fname',`lname`='$lname',`degree`='$degree',`email`='$email',`gen`='$gen',`exp`='$exp',`pic`='$pi' WHERE `teaid`='$teaid'";
            $run=mysqli_query($conn,$sql);
            if($run){
                move_uploaded_file($_FILES['pic']['tmp_name'],"./pictures/".$pi);
                   $msg="Data has been Updated";
                   header("Refresh:2, url=./teach_single_select.php");
               }else{
                 $msg="Data has not been updated";
               }
        }else{
            $msg="invalid imgs";
           }
     }else{
        $pi=$fet['pic'];
        $sql="UPDATE `teac-rec-single` SET `fname`='$fname',`lname`='$lname',`degree`='$degree',`email`='$email',`gen`='$gen',`exp`='$exp',`pic`='$pi' WHERE `teaid`='$teaid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            header("Refresh:2, url=./teach_single_select.php");
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
    <link rel="stylesheet" href="style.css" />
    <title>REGISTERATION</title>
</head>
<body>
    <div class="wraper">
        <div class="inner">
            <div class="image-holder">
                <img src="./backgroundimages/teacherqoute.jpg" >
            </div>
            <form method="post" enctype="multipart/form-data">
                <h1><?php echo @$msg; ?></h1>
                <h1>Registration Form For Teachers</h1>
                <div class="form-group">
                    <input type="text" placeholder="First Name" class="form-control" name="fname" value="<?php echo $fet['fname'] ?>"/>
                    <input type="text" placeholder="Last Name" class="form-control" name="lname" value="<?php echo $fet['lname'] ?>" />
                </div>
                <div class="form-wraper">
                    <input type="text" placeholder="Your Qualification" class="form-control" name="degree" value="<?php echo $fet['degree'] ?>" />
                </div>
                <div class="form-wraper">
                    <input type="text" placeholder="Email" class="form-control" name="email" value="<?php echo $fet['email'] ?>"/>
                </div>
                <?php 
       if($fet['gen']=="male"){
         $m="selected";
       }else{
        $f="selected";
       }
    ?>
                <div class="form-wraper">
                    <select name="gen" class="form-control">
                        <option value="" disabled selected>Gender</option>
                        <option value="male"<?php echo @$m; ?>> Male</option>
                        <option value="female" <?php echo @$f; ?> >Female</option>
                    </select>
                </div>
                <div class="form-wraper">
                    <input type="text" placeholder="Your Experience" class="form-control" name="exp" value="<?php echo $fet['exp'] ?>"/>
                </div>
                <div class="form-wraper">
                    <input type="file" placeholder="upload pic" class="form-control" name="pic" />
                </div>
                <input type="submit" value="Update" name="sub" class="button"/>
            </form>
        </div>
    </div>
</body>
</html>