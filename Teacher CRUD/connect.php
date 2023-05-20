<?php
$conn=mysqli_connect("localhost" , "root" , "" , "dbriz");
if($conn){
    //echo "You are connected";
}
else{
    echo "You are not connected";
}
?>