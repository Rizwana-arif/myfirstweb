<?php
include("./connect.php"); 
 $del=$_GET['sid'];
$sql="SELECT `spic` FROM `student record` WHERE `sid`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
  $pic=unserialize($fet['spic']);
  foreach($pic as $p){
    unlink("./pics/".$p);
  }
// unlink("./pics/".$fet['spic']);
 $dsql="DELETE FROM `student record` WHERE `sid`='$del'";
 $run=mysqli_query($conn,$dsql);
 if($run){

      header("Location:./multi_select_data.php");
 }



?>