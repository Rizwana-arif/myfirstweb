<?php
include ("./connect.php");
$del=$_GET['sid'];
$sql="SELECT `spic` FROM `stu-rec-single` WHERE `sid`='$del'" ;
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
unlink("./pictures/" .$fet['spic']);
$dsql="DELETE FROM `stu-rec-single` WHERE `sid`='$del'";
$run=mysqli_query($conn,$dsql);
if($run){
    header ("location:./stu_single_select.php");
}
?>