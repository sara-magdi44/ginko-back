 <?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

$sql = "SELECT * FROM `patient_information` ";
$result = mysqli_query($connection,$sql );
 while($row = mysqli_fetch_assoc($result)){
   $full_name =  json_encode  ($row['full_name']);
   $patient_gender =  json_encode  ($row['patient_gender']);
   $patient_contactnumber =  json_encode  ($row['patient_contactnumber'] );
   $day =  date('d', strtotime($row['date_of_birth']));
   $month =  date('F',strtotime($row['date_of_birth']));
   $year =  date('Y' ,strtotime($row['date_of_birth']));

 } 

 //this part for updating patient information 
// this needs to be in if rule so please try donin it
   $full_name = $_POST['full_name'];
   $patient_gender = $_POST['patient_gender'];
   $patient_contactnumber =  $_POST['patient_contactnumber'];
   $date_of_birth = $_POST['date_of_birth'];

 $updatesql = "UPDATE `patient_information` SET `patient_id`='',`full_name`='{$full_name}',`date_of_birth`='{$date_of_birth}',`patient_gender`='{$patient_gender}',`patient_contactnumber`='{$patient_contactnumber}' WHERE 1 ";

 $result = mysqli_query($connection , $updatesql); 






  

 ?>
 
