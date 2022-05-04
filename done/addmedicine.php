<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

  //recive medicine_reminder form with method post and save in dp
  $medicine_name   = $_POST['medicine_name'];
  $dose  = $_POST['medicine_dose '];
  $medicine_date = $_POST['medicine_date '];
  $medicine_time = $_POST['medicine_time'];
  $massage = json_encode("This Medication Already Added ") ;
// checking if medicine was added or not
$sql = "SELECT * FROM `medical_reminder` WHERE medicine_name= '{$medicine_name}' ";
$allmedicine = mysqli_query($connection,$sql );

 if(mysqli_num_rows($allmedicine)>0){
        // if the medication has been added this massage will apper 
       echo $massage;
 }
 else{
       $sql =" INSERT INTO `medical_reminder` (medicine_name, medicine_dose, medicine_date, medicine_time) 
        VALUES ('{$medicine_name}','{$dose}','{$medicine_date}','{$medicine_time}')";
       $allmedicine= mysqli_query($connection ,$sql);
   }

  ?>