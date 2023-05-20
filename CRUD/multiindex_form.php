<?php
include ("./connect.php");
if (isset($_POST['sub'])){
    $sname=mysqli_real_escape_string($conn,$_POST['sname']);
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $sadd=mysqli_real_escape_string($conn,$_POST['sadd']);
    $sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
    $smail=mysqli_real_escape_string($conn,$_POST['smail']);
    $smob=mysqli_real_escape_string($conn,$_POST['smob']);
    $sage=mysqli_real_escape_string($conn,$_POST['sage']);
    $snic=mysqli_real_escape_string($conn,$_POST['snic']);
    $spic=$_FILES['spic']['name'];
    foreach($spic as $p){
    $a=strtolower(pathinfo($p,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");

    if(in_array($a,$arr)){
        $mymsg="right";
    }
    else{
        $mymsg="img is not valid";
    }
}
        if($mymsg=="right"){
            $pi=serialize($spic);
    $sql="INSERT INTO `student record`(`sname`,`fname`,`sadd`,`sgen`,`smail`,`smob`,`sage`,`snic`,`spic`)VALUES('$sname','$fname','$sadd','$sgen','$smail','$smob','$sage','$snic','$pi')";
    $run=mysqli_query($conn,$sql);
            if($run){
                foreach($spic as $key=>$p){
             move_uploaded_file($_FILES['spic']['tmp_name'][$key],"./pictures/".$p);
                }
                $msg="Data has been inserted";
            }else{
            $msg="Data has not been inserted";
             }
     }        
    else{
        $msg="img invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style type="text/css">
        form {
            width: 400px;
            height: auto;
            background: #34cbf1;
            margin: 0px auto;
            padding: 30px;
        }

        form label {
            color: rgb(13, 10, 10);
            font-size: 20px;
            font-weight: bold;
        }

        form input {
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
            border-radius: 30px;
            border: none;
            padding-left: 20px;
            border-bottom: 3px #000 solid;
        }
    </style>

</head>

<body>
    <center>
        <h1>
            <?php echo @$msg; ?>
        </h1>
    </center>
    <form method="post" enctype="multipart/form-data">
        <h1 align="center">STUDENT RECORD</h1>
        <label>Student Name</label>
        <input type="text" name="sname" />
        <label>Father Name</label>
        <input type="text" name="fname" />
        <label>Address</label>
        <input type="text" name="sadd" />
        <label>Gender</label>
        <input type="text" name="sgen" />
        <label>Email</label>
        <input type="text" name="smail" />
        <label>Mobile No.</label>
        <input type="text" name="smob" />
        <label>Age</label>
        <input type="numbers" name="sage" />
        <label>CNIC</label>
        <input type="text" name="snic" />
        <input type="file" multiple name="spic[]" />
        <input type="submit" name="sub" value="Register" />
    </form>
</body>

</html>