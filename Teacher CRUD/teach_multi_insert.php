<?php
include ("./connect.php");
if(isset($_POST['sub'])){
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$quali=mysqli_real_escape_string($conn,$_POST['quali']);
$exp=mysqli_real_escape_string($conn,$_POST['exp']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$checkr=mysqli_real_escape_string($conn,$_POST['checkr']);
$pic=$_FILES['pic']['name'];
foreach($pic as $p){
    $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
    $arr=array("png","jpeg","jpg");
    if(in_array ($a,$arr)){
        $mymsg="right";
    }
    else{
        $mymsg="invalid img";
    }
}
    if($mymsg=="right"){
            $pi=serialize($pic);
            $sql="INSERT INTO `teac-rec-multi` (`fname`,`lname`,`email`,`quali`,`exp`,`country`,`checkr`,`pic`) VALUES ('$fname','$lname','$email','$quali','$exp','$country','$checkr','$pi')";
            $run=mysqli_query($conn,$sql);
            if($run){
                foreach($pic as $key=>$p){
                        move_uploaded_file($_FILES['pic']['tmp_name'][$key],"./pictures/" . $p);
                        $msg="Data has been inserted";
                }
            }
            else{
                $msg="data has not been inserted";
            }
    }
    else{
        $msg="invalid img";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styling.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2><?php echo @$msg; ?></h2>
        <h2>Registration Form</h2>
        <div class="form-container">
            <form method="post" enctype=multipart/form-data>
                <div class="form-input">
                    <i class="fa fa-user lock" ></i>
                    <input type="text" placeholder="First Name" name="fname" class="name" />
                    <span>
                        <i class="fa fa-user lock"></i>
                        <input type="text" placeholder="Last Name" name="lname" class="name" />
                    </span>
                </div>
                <div class="form-input">
                    <i class="fa fa-envelope email" ></i>
                    <input type="text" placeholder="Your Email " name="email" class="text-name" />
                </div>
                <div class="form-input">
                    <i class="fa fa-graduation-cap lock"  ></i>
                    <input type="text" placeholder="Qualification" name="quali" class="text-name"/>
                </div>
                <div class="form-input">
                    <i class="fa fa-briefcase lock" id="lock"></i>
                    <input type="text" placeholder="Your Experience" name="exp" class="text-name"/>
                </div>

                <div class="input-name">
                    <select class="country" name="country">
                        <option>Select a Country</option>
                        <option>FSD</option>
                        <option>ISB</option>
                        <option>Lahore</option>
                        <option>Karachi</option>
                        <option>Sialkot</option>
                    </select>
                </div>
                <div class="input-name">
                    <input type="checkbox" class="check-button" name="checkr"/>
                    <label>I accept the terms and conditions</label>
                </div>
                <div class="input-name">
                    <input type="file"  multiple name="pic[]" />
                </div>
                <div class="input-name">
                    <input type="submit" class="button" value="Register" name="sub" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>