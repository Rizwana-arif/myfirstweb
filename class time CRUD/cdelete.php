<?php
include("./connect.php");
$del=$_GET['ctid'];
$sql="DELETE FROM `class` WHERE `ctid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("Location:./classview.php");
}
?>