<?php
  session_start();
  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    $_SESSION = array();
    session_destroy();
  }  
  header("location: index.php");
?>

