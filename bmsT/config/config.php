<?php
ini_set("display_errors",1);
//session_start();
$hostname="localhost";//127:0:01
$username="root";
$password="";
$database="st";

$host="localhost";
$username="root";
$password="";
$db="";

// $conn = new mysqli($host,$username,$password,$db);
$conn = mysqli_connect($hostname,$username,$password,$database);
if($conn->connect_error){
    //echo'failed';
}else{
    //echo'pass';
}
?>