<?php
const DBNAME = 'enquirydb';
const SERVERNAME = 'localhost';
const USERNAME = 'root';
const PASSWORD = "";

function createDatabase(){
  $conn1 = mysqli_connect(SERVERNAME, USERNAME, PASSWORD);
  if($conn1){
    $selectedDb = mysqli_select_db($conn1, DBNAME);
    if(!$selectedDb){
      $query = "CREATE DATABASE " . DBNAME;
      if(!mysqli_query($conn1, $query)){
        die("Error: " . mysqli_error($conn1));
      }
    }
  }else{
    die("Connection Failed: " . mysqli_connect_error());
  }
}

function createTable1(){
  $conn1 = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  if($conn1){
    $query1 = "SELECT * FROM userinfo";
    $result1 = mysqli_query($conn1, $query1);
    if(!($result1)){
      $que1 = "CREATE TABLE userinfo (
      userID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      subject VARCHAR(255) NOT NULL,
      fname VARCHAR(25) NOT NULL,
      lname VARCHAR(25) NOT NULL,
      email VARCHAR(255) NOT NULL,
      phone VARCHAR(10) NOT NULL,
      street VARCHAR(40) NOT NULL,
      city VARCHAR(20) NOT NULL,
      state VARCHAR(255) NOT NULL,
      postcode INT(5) NOT NULL,
      product VARCHAR(255) NOT NULL,
      duration INT(11) NOT NULL,
      comment TEXT
      )";
      
      $res1 = mysqli_query($conn1, $que1);
    }
  }else{
    die("Connection Failed: " . mysqli_connect_error()); 
  }
  mysqli_close($conn1);
}

function createTable2(){
  $conn2 = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  if($conn2){
    $query2 = "SELECT * FROM usertable";
    $result2 = mysqli_query($conn2, $query2);
    if(!($result2)){
      $que2 = "CREATE TABLE usertable (
      username VARCHAR(255) NOT NULL,
      password VARCHAR(255) NOT NULL,
      name VARCHAR(255) NOT NULL,
      datejoined DATE
      )";
      $res2 = mysqli_query($conn2, $que2);
    }
  }else{
    die("Connection Failed: " . mysqli_connect_error()); 
  }
  mysqli_close($conn2);
}

createDatabase();
createTable1();
createTable2();
?>



<div id="logo">
    <img src="image/logo.gif" alt="logo" />
</div>