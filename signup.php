
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="easyemi";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
// now check the connection 


if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $c_name= $_POST['c_name'];
    $mobile= $_POST['mobile'];
  
    

$sql_query= "INSERT INTO 'signup_user'('first_name', 'phone') values ('$c_name','$mobile')";

$result=mysqli_query($conn,$sql);
    
if(mysqli_query($result))
{
    echo "New Details Entry inserted successfully !" ;
} 
else{
    echo "Error:" . mysqli_error($conn);
}
}
  
?>