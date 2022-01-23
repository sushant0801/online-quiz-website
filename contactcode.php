<?php

session_start();
include ('connection.php');

if(isset($_POST['ctc-submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $ph_no = $_POST['tel'];
    $msg = $_POST['msg'];


    $user_query="INSERT INTO contact (fname,lname,email,ph_no,msg) VALUES ('$fname','$lname','$email','$ph_no','$msg')";
    $user_query_run=mysqli_query($conn,$user_query);
    $_SESSION['status']="LOGIN SUCCESSFULLY";

    if($user_query_run) {
        header("location:homepage.html");
    }
    else {
        echo "Error 404: Submission Error ";
    }
}

?>