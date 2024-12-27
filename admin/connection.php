<?php
$host = "localhost";
$user = "root";
$password = '';
$database = "travelBlog";

$conn = mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die("failed". $mysqli_connect_error());
}

?>