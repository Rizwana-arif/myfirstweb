<?php
include("./connect.php"); 
 $del=$_GET['sname'];
$sql="SELECT `spic` FROM `registration` WHERE `sname`='$del'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
  //$pic=unserialize($fet['spic']);
  //foreach($pic as $p){
   // unlink("./pics/".$p);
  //}
unlink("./pictures/".$fet['spic']);
 $dsql="DELETE FROM `registration` WHERE `sname`='$del'";
 $run=mysqli_query($conn,$dsql);
 if($run){

      header("Location:./singleselect_data.php");
 }



?>