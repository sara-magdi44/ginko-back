<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();
//there is messing code that get the loged in account by id i dont know hoe to get it 
$sql = "SELECT  * FROM `register` ";
$result = mysqli_query($connection , $sql);

while($row = mysqli_fetch_assoc($result)){
    
 $full_name =  json_encode  ($row['full_name']);
 $email =   json_encode  ($row['email']);
 $user_password =  json_encode  ($row['user_password']);
 $contactnumber =  json_encode  ($row['contactnumber'] );

//this echo th display the result of the code in my screen dont need to put it in the flutter 
 echo $full_name ;
 echo $email ;
 echo $user_password ;
 echo $contactnumber;
}





?>