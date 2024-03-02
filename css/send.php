<?php

if(isset($_POST['name'])) && isset ($_POST['meessage']){
    include 'db_conn.php';


}else{
    header("Location:contact.html");
}