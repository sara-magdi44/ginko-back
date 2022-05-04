<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

  //recive medical_history form with method post and save in dp
  $doctor_name = $_POST['doctor_name'];
  $doctor_number   = $_POST['doctor_number'];
  $apiontment = $_POST['apiontment']; // i have change it from date (aka 2022-10-5 this what it would only be accepted in database) to regular text (aka 10 april 2022 to match the design)
  $medication = $_POST['medication'];
  
  $massage = json_encode("Account Already Exists");

  // checking if record was added or not
  $sql = "SELECT * FROM `medical-history` WHERE doctor_name = '{$doctor_name}' ";
  $result = mysqli_query($connection, $sql);

  if(mysqli_num_rows($result)>0){
      
      // if the recored already exist so this massage will pop out (in flutter navigator.pop or maybe AlertDialog )   
      echo $massage;

 }else{
       $sql ="INSERT INTO`medical-history` (doctor_name, doctor_number, apiontment, medication) 
        VALUES ('{$doctor_name}','{$doctor_number}','{$apiontment}','{$medication}')";
       $result= mysqli_query($connection ,$sql);
   }

  ?>