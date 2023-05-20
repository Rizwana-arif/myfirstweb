<?php 
include ("./connect.php");
$sid=$_GET['sid'];
     $sql="SELECT * FROM `stu-rec-single` WHERE `sid`='$sid'";
     $run=mysqli_query($conn,$sql);
     $fet=mysqli_fetch_assoc($run);
if(isset($_POST['sub'])){
    $sname=mysqli_real_escape_string($conn,$_POST['sname']);
    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
    $semail=mysqli_real_escape_string($conn,$_POST['semail']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $spass=mysqli_real_escape_string($conn,$_POST['spass']);
    $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
    $sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
    @$spic=mysqli_real_escape_string($conn,$_FILES['spic']['name']);
    if(!empty($spic)){
        $a=strtolower(pathinfo($spic,PATHINFO_EXTENSION));
        $arr=array("png","jpg","jpeg");
        if(in_array($a,$arr)){
            unlink("./pictures/".$fet['spic']);
            $pi=rand(10000,90000).".".$a;
            $sql="UPDATE `stu-rec-single` SET `sname`='$sname',`uname`='$uname',`semail`='$semail',`phone`='$phone',`spass`='$cpass',`sgen`='$sgen',`spic`='$pi' WHERE `sid`='$sid'";
            $run=mysqli_query($conn,$sql);
            if($run){
                move_uploaded_file($_FILES['spic']['tmp_name'],"./pictures/".$pi);
                   $msg="Data has been Updated";
                   header("Refresh:2, url=./stu_single_select.php");
               }else{
                 $msg="Data has not been updated";
               }
        }else{
            $msg="invalid imgs";
           }
     }else{
        $pi=$fet['spic'];
        $sql="UPDATE `stu-rec-single` SET `sname`='$sname',`uname`='$uname',`semail`='$semail',`phone`='$phone',`spass`='$cpass',`sgen`='$sgen',`spic`='$pi' WHERE `sid`='$sid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            header("Refresh:2, url=./stu_single_select.php");
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
    <title>Registration Form</title>
</head>
<body>
    <div class="main-div">
    <h1 id="form-title"><?php echo @$msg ?></h1>
        <h1 id="form-title">Registration Form </h1>
        <form method=post enctype="multipart/form-data">
            <div class="main-user-info">
                <div class="input-user">
                    <label>Student Name</label>
                    <input type="text" name="sname" value="<?php echo $fet['sname']; ?>"  placeholder="Enter Your Name"/>
                </div>
                <div class="input-user">
                    <label>User Name</label>
                    <input type="text" name="uname" value="<?php echo $fet['uname']; ?>"  placeholder="Enter UserName"/>
                </div>
                <div class="input-user">
                    <label>Email</label>
                    <input type="text" name="semail" value="<?php echo $fet['semail']; ?>"  placeholder="Enter email"/>
                </div>
                <div class="input-user">
                    <label>Phone No.</label>
                    <input type="text" name="phone" value="<?php echo $fet['phone']; ?>"  placeholder="Enter phone no."/>
                </div>
                <div class="input-user">
                    <label>Password</label>
                    <input type="password" name="spass" value="<?php echo $fet['spass']; ?>"  placeholder="Enter Password"/>
                </div>
                <div class="input-user">
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" value="<?php echo $fet['cpass']; ?>"  placeholder="Confirm Password"/>
                </div>
                <div class="gender-detail">
                <?php 
       if($fet['sgen']=="male"){
         $m="checked";
       }else{
        $f="checked";
       }
    ?>
                    <span>Gender</span>
                    <div class="gender-category">
                        <input type="radio" name="sgen" <?php echo @$m; ?> value="male" />
                        <label>Male</label>
                        <input type="radio" name="sgen" <?php echo @$m; ?> value="female" />
                        <label>Female</label>
                       
                    </div>
                </div>
                <div class="file">
                    <input type="file" name="spic" />
                </div>
                <div class="form-submit">
                    <input type="submit" value="Update" name="sub" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>





