
<?php
  include("./connect.php");
  $sid=$_GET['sid'];
     $sql="SELECT * FROM `student record` WHERE `sid`='$sid'";
     $run=mysqli_query($conn,$sql);
     $fet=mysqli_fetch_assoc($run);
  if(isset($_POST['sub'])){
        $sname=mysqli_real_escape_string($conn,$_POST['sname']);
         $fname=mysqli_real_escape_string($conn,$_POST['fname']);
         $sadd=mysqli_real_escape_string($conn,$_POST['sadd']);
         $sgen=mysqli_real_escape_string($conn,$_POST['sgen']);
         $smail=mysqli_real_escape_string($conn,$_POST['smail']);
         $smob=mysqli_real_escape_string($conn,$_POST['smob']);
         $sage=mysqli_real_escape_string($conn,$_POST['sage']);
         $snic=mysqli_real_escape_string($conn,$_POST['snic']);
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
             $sql="UPDATE `student record` SET `sname`='$sname',`fname`='$fname',`sadd`='$sadd',`sgen`='$sgen',`smail`='$smail',`smob`='$smob',`sage`='$sage',`snic`='$snic',`spic`='$pi' WHERE `sid`='$sid'";

                 $run=mysqli_query($conn,$sql);
                 if($run){
                  foreach($spic as $key=>$p){
                     move_uploaded_file($_FILES['spic']['tmp_name'][$key],"./pictures/".$p);
                  }
                     $msg="Data has been Updated";
                     header("Refresh:2, url=./multi_select_data.php");
                 }else{
                   $msg="Data has not been updated";
                 }
    
             }else{
                 $msg="Your imgs is not right";
             }
         }else{
            $pi=$fet['spic'];
            $sql="UPDATE `student record` SET `sname`='$sname',`fname`='$fname',`sadd`='$sadd',`sgen`='$sgen',`smail`='$smail',`smob`='$smob',`sage`='$sage',`snic`='$snic',`spic`='$pi' WHERE `sid`='$sid'";
            $run=mysqli_query($conn,$sql);
            if($run){
                header("Refresh:2, url=./multi_select_data.php");
                $msg="Data has been Updated but img is not right";
            }else{
                $msg="Data has not been updated";
              }
         }
  

  } 
 ?>
<!DOCTYPE html>

<head>

  <title>Gc University</title>
  <link rel="icon" type="image/png" sizes="92x92" href="img/gcuni.jpg" />
  <style type="text/css">
    form {
      width: 300px;
      height: auto;
      margin: 0px auto;
      background-color: aqua;
      padding: 10px;
    }

    form label {
      font-size: 25px;
      font-style: italic;
      color: #333333;

    }

    form input {
      margin-top: 10px;
      width: 100%;
      height: 30px;
      margin-bottom: 20px;
      border-radius: 40px;
      border: none;
      text-indent: 10px;
      color: navy;
      font-size: 25px;
      font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
    }
  </style>

</head>

<body>

<center><h1><?php echo @$msg; ?></h1></center>
  <form method="post" enctype="multipart/form-data" >
    <label>Name</label>
    <input type="text" name="sname" value="<?php echo $fet['sname']; ?>" />

    <label>F_name</label>
    <input type="text" name="fname" value="<?php echo $fet['fname']; ?>" />

    <label>Address</label>
    <input type="text" name="sadd" value="<?php echo $fet['sadd']; ?>" />

    
    <?php 
       if($fet['sgen']=="male"){
         $m="checked";
       }else{
        $f="checked";
       }
    ?>
    <label>Gender</label>
    <input type="radio" name="sgen" <?php echo @$m; ?> value="male" />Male
    <input type="radio" name="sgen" <?php echo @$f; ?> value="female" />female
    <br><br>
    <label>email</label>
    <input type="text" name="smail" value="<?php echo $fet['smail'] ;?>" />


    <label>Mob_no</label>
    <input type="number" name="smob" value="<?php echo $fet['smob']; ?>" />

    <label>Age</label>
    <input type="text" name="sage" value="<?php echo $fet['sage']; ?>" />
    <label>CNIC</label>
    <input type="text" name="snic" value="<?php echo $fet['snic']; ?>" />
    <label>Spic</label>
    <input type="file" multiple name="spic[]" />


    <input type="submit" name="sub" value="Update" />

  </form>

</body>

</html>