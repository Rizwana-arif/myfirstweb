<?php
include ("./connect.php");
if(isset($_POST['sub'])){
$sname=mysqli_real_escape_string($conn,$_POST['sname']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$sadd=mysqli_real_escape_string($conn,$_POST['sadd']);
$smail=mysqli_real_escape_string($conn,$_POST['smail']);
$snic=mysqli_real_escape_string($conn,$_POST['snic']);
$sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
$spic=$_FILES['spic']['name'];
foreach($spic as $p){
    $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
    $arr=array("png","jpeg","jpg");
    if(in_array ($a,$arr)){
        $rname=rand(10000,900000);
        $np=$rname.".".$a;
        $parr[]=$np;
        $mymsg="right";
    }
    else{
        $mymsg="invalid img";
    }
}
    if($mymsg=="right"){
            $pi=serialize($parr);
            $sql="INSERT INTO `stu-rec-multi` (`sname`,`fname`,`sadd`,`smail`,`snic`,`sgen`,`spic`) VALUES ('$sname','$fname','$sadd','$smail','$snic','$sgen','$pi')";
            $run=mysqli_query($conn,$sql);
            if($run){
                foreach($parr as $key=>$p){
                        move_uploaded_file($_FILES['spic']['tmp_name'][$key],"./pictures/" . $p);
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
                <input id="name" type="text" name="sname" placeholder="Enter your good name" />
            </br> 
                <label>Father Name : </label>
            </br>
                <input id="name" type="text" name="fname" placeholder="Your father name?"/>
            </br>
                <label>Address : </label>
            </br>
                <input id="name"  type="text" name="sadd" placeholder="Address plz"/>
            </br>
                <label>Email : </label>
            </br>
                <input id="name" type="text" name="smail" placeholder="write your enail"/>
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
                <input id="name" type="text" name="snic" placeholder="Enter your id card no."/>
            </br>
                <label>Gender</label>
            </br>
                <input type="radio" name="sgen" value="male"/>Male
                <input type="radio" name="sgen" value="female" />Female
            </br>
                <input id="file" type="file" multiple name="spic[]" />
            </br></br>
                <input id="sub" type="submit" name="sub" value="Register" />
            </form>
        </div>
    </div>
</body>
</html>