<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

  $full_name = $_POST['full_name'];
  $date_of_birth = $_POST['date_of_birth'];
  $patient_gender= $_POST['patient_gender'];
  $contact_number= $_POST['patient_contactnumber'];
  $massage = json_encode("This Patient Already Added ") ;

$sql = "SELECT * FROM `patient_information` WHERE full_name ='{$full_name}'";
$result = mysqli_query($connection,$sql );

 if(mysqli_num_rows($result)>0){
        
        echo $massage;
        
 }
 else{
       $sql ="INSERT INTO `patient_information`( full_name ,date_of_birth  ,patient_gender , patient_contactnumber)
        VALUES ('{$full_name}','{$date_of_birth}','{$patient_gender}','{$contact_number}');";
       $result= mysqli_query($connection ,$sql);
   }

  ?>