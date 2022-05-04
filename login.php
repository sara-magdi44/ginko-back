<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

if (isset($_POST['email']) && isset($_POST['user_password'] )){
  $email = $_POST['email'];
  $user_password =$_POST['user_password'];
  
  $email = mysqli_real_escape_string($connection, $email);
  
  $sql = "SELECT * FROM `register WHERE email ={'$email'} , user_password = {'$user_password'}";
  $res = mysqli_query($connection , $sql);
  
  if(mysqli_num_rows($res)>0){

  echo json_encode( $email , $user_password);
  }else {
   echo json_encode("Please Enter Another Password or Email");
  }
}
 

  

?>

