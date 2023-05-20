<?php
include ("./connect.php");
if(isset($_POST['sub'])){
    $techid=mysqli_real_escape_string($conn,$_POST['techid']);
    $classtime=mysqli_real_escape_string($conn,$_POST['classtime']);
    $sname=mysqli_real_escape_string($conn,$_POST['sname']);
    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
    $semail=mysqli_real_escape_string($conn,$_POST['semail']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $spass=mysqli_real_escape_string($conn,$_POST['spass']);
    $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
    $sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
    $spic=mysqli_real_escape_string($conn,$_FILES['spic']['name']);
    $a=strtolower(pathinfo($spic,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr)){
        $pi=rand(10000,90000).".".$a;
        $sql="INSERT INTO `stu-rec-single`(`techid`,`classtime`,`sname`, `uname`,`semail`,`phone`,`spass`,`cpass`,`sgen`,`spic`) VALUES ('$techid','$classtime','$sname','$uname','$semail','$phone','$spass','$cpass','$sgen','$pi')";
        $run=mysqli_query($conn,$sql);
        if($run){

            move_uploaded_file($_FILES['spic']['tmp_name'],"./pictures/".$pi);
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
    <title>Registration Form</title>
</head>
<body>
    <div class="main-div">
    <h1 id="form-title"><?php echo @$msg ?></h1>
        <h1 id="form-title">Registration Form </h1>
        <form method=post enctype="multipart/form-data">
            <div class="popup">
            <select name="techid" >
             <option value="">Select Teachers</option>
             <?php 
                  $tsql="SELECT * FROM `teac-rec-single`";
                  $trun=mysqli_query($conn,$tsql);
                  while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                 <option value="<?php echo $tfet['teaid'] ?>"><?php echo $tfet['fname']; ?></option>
                    <?php
                  }
              ?>
        </select>
        <select name="classtime" >
             <option value="">Select Time</option>
             <?php 
                  $tsql="SELECT * FROM `class`";
                  $trun=mysqli_query($conn,$tsql);
                  while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                 <option value="<?php echo $tfet['ctid'] ?>"><?php echo $tfet['ctime']; ?></option>
                    <?php
                  }
              ?>
        </select>
            </div>
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
                    <input type="text" name="semail" placeholder="Enter email"/>
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





