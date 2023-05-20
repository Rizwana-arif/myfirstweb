<?php
include ("./connect.php");
if(isset($_POST['sub'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $degree=mysqli_real_escape_string($conn,$_POST['degree']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $gen=mysqli_real_escape_string($conn,$_POST['gen']);
    $exp=mysqli_real_escape_string($conn,$_POST['exp']);
    $pic=mysqli_real_escape_string($conn,$_FILES['pic']['name']);
    $a=strtolower(pathinfo($pic,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr)){
        $sql="INSERT INTO `teac-rec-single`(`fname`, `lname`,`degree`,`email`,`gen`,`exp`,`pic`) VALUES ('$fname','$lname','$degree','$email','$gen','$exp','$pic')";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['pic']['tmp_name'],"./pictures/".$pic);
            $msg="Your data has been inserted";
        }
        else{
            $msg= "Your data has not been inserted";
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
                    <input type="text" placeholder="First Name" class="form-control" name="fname" />
                    <input type="text" placeholder="Last Name" class="form-control" name="lname" />
                </div>
                <div class="form-wraper">
                    <input type="text" placeholder="Your Qualification" class="form-control" name="degree" />
                </div>
                <div class="form-wraper">
                    <input type="text" placeholder="Email" class="form-control" name="email" />
                </div>
                <div class="form-wraper">
                    <select name="gen" class="form-control">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-wraper">
                    <input type="text" placeholder="Your Experience" class="form-control" name="exp" />
                </div>
                <div class="form-wraper">
                    <input type="file" placeholder="upload pic" class="form-control" name="pic" />
                </div>
                <input type="submit" value="Register" name="sub" class="button"/>
            </form>
        </div>
    </div>
</body>
</html>