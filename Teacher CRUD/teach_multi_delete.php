<?php 
include ("./connect.php");
$del=$_GET['teaid'];
$sql="SELECT `pic` FROM `teac-rec-multi` WHERE `teaid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
$pic=unserialize($fet['pic']);
foreach($pic as $p){
    unlink("./pictures/" . $p);
}
$dsql="DELETE FROM `teac-rec-multi` WHERE `teaid`='$del'";
$run=mysqli_query($conn,$dsql);
if ($run){
    header("location:./teach_multi_select.php");
}
?>