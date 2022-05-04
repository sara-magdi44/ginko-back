<?php
//connection database to the project
$connection = mysqli_connect('localhost','root','','ginko');

//checking if the connection is ok
if(!$connection){
 echo"connection fail";
}else{
 echo "connection sucessful";
};
?>