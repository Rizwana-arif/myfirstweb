<?php
include ("./connect.php");
$del=$_GET['teaid'];
$sql="SELECT `pic` FROM `teac-rec-single` WHERE `teaid`='$del'" ;
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
unlink("./pictures/" .$fet['pic']);
$dsql="DELETE FROM `teac-rec-single` WHERE `teaid`='$del'";
$run=mysqli_query($conn,$dsql);
if($run){
    header ("location:./teach_single_select.php");
}
?>