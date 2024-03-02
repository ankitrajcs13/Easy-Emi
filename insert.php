<?php

// connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="easyemi";

//creating a connection
$conn=mysqli_connect($servername,$username,$password,$database);
//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

// Sql query to be executed
$name= "Harshit";
$phone="123456789";

$sql="INSERT INTO `signup_user` (`first_name`, `phone`) VALUES ('$name', '$phone')";
$result=mysqli_query($conn,$sql);


// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully !! <br>";
}
else{
    echo "The record was not inserted successfully because of this error---->".
    mysqli_error($conn);
}
?>