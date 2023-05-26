<?php 
session_start();

   if(empty($_SESSION['email']) && empty($_SESSION['name']) && empty($_SESSION['fname'])){
     echo "<h1>Plz Login Now</h1>";
   }else{
    echo "<h1>Your name is ".@$_SESSION['name']."</h1>";
    echo "<h1>Your Father name is ".@$_SESSION['fname']."</h1>";
    echo "<h1>Your Email is ".@$_SESSION['email']."</h1>";
 
   }
?>