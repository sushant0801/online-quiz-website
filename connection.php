<?php

// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "online_quiz";

//Connection

$conn = mysqli_connect("localhost","root","","online_quiz");

if(!$conn) {
    echo"Not Connected";
    die();
}
/*
else {
    echo "Database Connected";
}
*/
?>