<?php
//inclue database connection
require 'databaseconnectiom.php'; 
session_start();

// query to all (*) get the data from table
 $query = "SELECT * FROM `awareness` ";
 $result = mysqli_query($connection , $query);

 // fetch them
if ((mysqli_num_rows($result) > 0) ){

  $awareness = array();
  $awareness["record"] = array();
 while($row = mysqli_fetch_assoc($result)){
 //extract the row to show it just only as $awareness_id and $answer and $question
  extract ($row);

  $awareness_items =array(
          "id" => $awareness_id,
          "question"=> $question,
          "answer"=> $answer,   
  );

  array_push( $awareness["record"] , $awareness_items );

 }
 //just to set respone code 200(ok)
http_response_code(200);

// show awareness data in json format
$data = json_encode($awareness);
//to print(echo) the data on the screen (its just for the back to see result)
echo $data;
}else{

       http_response_code(404);
       echo json_encode("Sorry! We dont have an Answer for your Question");
}


?>