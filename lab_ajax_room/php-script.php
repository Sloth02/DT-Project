<?php

include('database.php');
$db=$conn;// database connection  

//legal input values
 $fullName     = legal_input($_POST['roomname']);
 $emailAddress = legal_input($_POST['detail']);
 $city         = legal_input($_POST['roomtypeid']);

   
if(!empty($fullName) && !empty($emailAddress) && !empty($city)){
    //  Sql Query to insert user data into database table
    Insert_data($fullName,$emailAddress,$city);
}else{
 echo "All fields are required";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    //$value = htmlspecialchars($value);
    return $value;
}

// // function to insert user data into database table
 function insert_data($fullName,$emailAddress, $city){
 
     global $db;

      $query="INSERT INTO tbroom(roomname,detail,roomtypeid) VALUES('$fullName','$emailAddress','$city')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
       echo "<META HTTP-EQUIV='refresh'
       CONTENT='3; URL=user-form.php'>";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

?>