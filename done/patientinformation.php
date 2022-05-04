<?php 
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

 $full_name=  $_POST['full_name'];
 $email = $_POST['email'];
 $user_password  = $_POST['user_password'];
 $contactnumber =  $_POST['contactnumber'];
 
 $updatedata = "UPDATE  SET full_name = '$full_name'  , email = '$email' , user_password = '$user_password' , contactnumber = '$contactnumber' WHERE ";
 $updatedataresult = mysqli_query($connection , $updatedata); 
     


?>