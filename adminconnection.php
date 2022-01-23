<?php

$server="localhost";
$username="root";
$password="";
$dbname="admin";

$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn)
{
    echo"ok";
}





?>
