<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

  // get  medical reminder  from data base
$sql = "SELECT * FROM `medical_reminder`";
$allmedicine = mysqli_query($connection,$sql );
//display medical reminder
 while($medicine=mysqli_fetch_assoc($allmedicine)){
  $medicine_name   = json_encode  ($row['medicine_name']);
  $dose  = json_encode  ($row['medicine_dose ']);
  $start_medicine_date = json_encode  ($row['start_medicine_date ']);
  $end_medicine_date = json_encode  ($row['end_medicine_date ']);
  $medicine_time= json_encode  ($row['medicine_time']);
 }
// funtion for medical reminder
while($start_medicine_date==date('d/m') ||$medicine_time==time('h')){
    echo json_encode("make alret message its time to take medicine");
}
// delete medical reminder
if(isset($_POST['delete medicine id'])){
    $id=$_POST['delete medicine id'];
    $deleteSql="DELETE FROM `medical_reminder` WHERE`medicine_id`='$id'";
    $deletmedicinereminder=mysqli_query($connection ,$deleteSql);
}
 ?>