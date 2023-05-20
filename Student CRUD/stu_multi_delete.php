<?php 
include ("./connect.php");
$del=$_GET['sid'];
$sql="SELECT `spic` FROM `stu-rec-multi` WHERE `sid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
$pic=unserialize($fet['spic']);
foreach($pic as $p){
    unlink("./pictures/" . $p);
}
$dsql="DELETE FROM `stu-rec-multi` WHERE `sid`='$del'";
$run=mysqli_query($conn,$dsql);
if ($run){
    header("location:./stu_multi_select.php");
}
?>