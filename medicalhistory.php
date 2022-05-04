<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

// get all medicalhistory record from database
$sql = "SELECT * FROM `medical-history`";
$result = mysqli_query($connection,$sql );

//display all record
 while($row = mysqli_fetch_assoc($result)) {

 $name =  json_encode  ($row['doctor_name']);
 $apiontment =   json_encode  ($row['apiontment']);
 $doctor_number =  json_encode  ($row['doctor_number']);
 $medication =  json_encode  ($row['medication'] );

//this echo th display the result of the code in my screen dont need to put it in the flutter 
 echo $name ;
 echo $apiontment ;
 echo $doctor_number ;
 echo $medication ;
}



?>