<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Error due to this reason->" . mysqli_error($conn));
}
?>