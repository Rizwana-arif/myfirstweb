
<?php
include ("./connect.php");
if (isset($_POST['sub'])){
$sname=mysqli_real_escape_string($conn,$_POST['sname']);
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$spass=mysqli_real_escape_string($conn,$_POST['spass']);
$cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
$sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
$spic=mysqli_real_escape_string($conn,$_FILES['spic']['name']);

$a=strtolower(pathinfo($spic,PATHINFO_EXTENSION));
$arr=array("jpg","jpeg","png");
if (in_array($a,$arr)){

$sql="INSERT INTO `registration`(`sname`, `uname` , `email` , `phone`, `spass`,`cpass`,`sgen`,`spic`)VALUES('$sname','$uname','$email','$phone','$spass','$cpass','$sgen','$spic')";
$run=mysqli_query($conn,$sql);

if ($run){
    move_uploaded_file($_FILES['spic']['tmp_name'],"./pictures/".$spic);
    $msg="Your Data has been inserted";
}
else{
    $msg="Your Data has not been inserted";
}
}
else {
    $msg="Invalid File";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css" />
    <title>Registration Form</title>
</head>
<body>
    <div class="main-div">
    <h1 id="form-title"><?php echo @$msg ; ?></h1>
        <h1 id="form-title">Registration Form</h1>
        <form method=post enctype="multipart/form-data">
            <div class="main-user-info">
                <div class="input-user">
                    <label>Student Name</label>
                    <input type="text" name="sname" placeholder="Enter Your Name"/>
                </div>
                <div class="input-user">
                    <label>User Name</label>
                    <input type="text" name="uname" placeholder="Enter UserName"/>
                </div>
                <div class="input-user">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter email"/>
                </div>
                <div class="input-user">
                    <label>Phone No.</label>
                    <input type="text" name="phone" placeholder="Enter phone no."/>
                </div>
                <div class="input-user">
                    <label>Password</label>
                    <input type="password" name="spass" placeholder="Enter Password"/>
                </div>
                <div class="input-user">
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" placeholder="Confirm Password"/>
                </div>
                <div class="gender-detail">
                    <span>Gender</span>
                    <div class="gender-category">
                        <input type="radio" name="sgen" value="male" />
                        <label>Male</label>
                        <input type="radio" name="sgen" value="female" />
                        <label>Female</label>
                        <input type="radio" name="sgen" value="other" />
                        <label>other</label>
                    </div>
                </div>
                <div class="file">
                    <input type="file" name="spic" />
                </div>
                <div class="form-submit">
                    <input type="submit" value="Register" name="sub" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>