<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

//post to send data to db
 $full_name=  $_POST['full_name'];
 $email = $_POST['email'];
 $user_password  = $_POST['user_password'];
 $contactnumber =  $_POST['contactnumber'];

 $massage = json_encode("account already exists");
// checking if account is registed or not
$queryregist = "SELECT * FROM `register` WHERE email ='{$email}'";
$result = mysqli_query($connection, $queryregist);

 if(mysqli_num_rows($result)>0){
        //EXIST ACCOUNT
        echo $massage;
 }else{
        //creat new account 
        $queryregist ="INSERT INTO register ( full_name , email , user_password , contactnumber) VALUES ('{$full_name}','{$email}','{$user_password}','${contactnumber}')";
        $result = mysqli_query($connection ,$queryregist);
    }
?>