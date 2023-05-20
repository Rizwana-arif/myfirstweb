<?php 
//include file to connect database
include ("./connect.php");
//condition is used to show data in db if sub have any data ,
//mysqli_real_escape_string is used to secure data from hackers
if (isset($_POST['sub'])){
$sname=mysqli_real_escape_string($conn, $_POST['sname']);
$spass=mysqli_real_escape_string ($conn,$_POST['spass']);
$semail=mysqli_real_escape_string ($conn,$_POST['semail']);
$sage=mysqli_real_escape_string ($conn,$_POST['sage']);
$sgen=mysqli_real_escape_string ($conn,$_POST['sgen']);
$date=mysqli_real_escape_string ($conn,$_POST['date']);
$stext=mysqli_real_escape_string ($conn,$_POST['stext']);
//for taking picture or file from user use _files instead of _post
$spic=mysqli_real_escape_string($conn,$_FILES['spic']['name']);

// to check the path information and strtolower is an array predefined function used to convert data in lower case
$a=strtolower(pathinfo($spic,PATHINFO_EXTENSION));
$arr=array("jpg","jpeg","png");

   if(in_array($a,$arr)){
// this is a query 
   $sql="INSERT INTO `student table`(`sname`, `spass`, `semail`, `sage`, `sgen`, `date`, `stext`,`spic`) VALUES ('$sname','$spass','$semail','$sage','$sgen','$date','$stext','$spic')";
// that is used to check is the query is run or not 
   $run=mysqli_query($conn,$sql);
         if($run){
          move_uploaded_file($_FILES['spic']['tmp_name'],"./pictures/".$spic);
            $msg="Data has been Inserted";
         }
         else{
          $msg="Data has not been Inserted";
         }
   }
   else{
   $msg="invalid pictures";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
   <title>Student Form</title>
</head>

<body style="background-color:aqua;">

   <!--print message before to see that if data base is connected or not-->

   <h1 align="center">
      <?php echo @$msg; ?>
   </h1>
   <h3 align="center">REGISTRATION FORM</h3>

   <form method="post" style="margin-top:5%" enctype="multipart/form-data">
      <table align="center">
         <tr>
            <td>user name</td>
            <td><input type="text" name="sname"></td>
         </tr>
         <tr>
            <td>password</td>
            <td><input type="password" name="spass"></td>
         </tr>
         <tr>
            <td>Email</td>
            <td><input type="text" name="semail"></td>
         </tr>
         <tr>
            <td>Age</td>
            <td><input type="numbers" name="sage"></td>
         </tr>
         <tr>
            <td>Gender</td>
            <td>

               <select name="sgen">
                  <option>female </option>
                  <option> male</option>

               </select>
         <tr>
            <td>date</td>
            <td><input type="date" name="date"></td>
         </tr>
         <tr>
            <td>self writing</td>
            <td><textarea name="stext" cols="30" rows="10"></textarea></td>
         </tr>
         </td>

         </tr>
         <tr>
            <td colspan="2"><input type="file" name="spic" /></td>
         </tr>
         <tr>
            <td colspan="2" align="centre">
               <input type="submit" value="register" name="sub">

            </td>
         </tr>
      </table>
   </form>

</body>

</html>