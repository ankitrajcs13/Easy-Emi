
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="easyemi";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
// now check the connection 

if(!$conn)
{die("Connection Failed:".mysqli_connect_error());}

if(isset($_POST['save']))
{
    $first_name= $_POST['first_name'];
    $phone= $_POST['phone'];
    
    
    
    $sql_query= "INSERT INTO entry_details(first_name, phone,password,conf_pass)
    VALUES ('$first_name','$phone')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted successfully !" ;
    } else
    {
        echo "Error:" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
}
?>