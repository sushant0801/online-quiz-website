<?php
session_start();
include("connection.php");

//var_dump($_POST);
if(isset($_POST['adduser']))
{
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $password=$_POST['password'];
    $conform=$_POST['conform'];

    if($password==$conform)
    {
        $user_query="INSERT INTO users (name,email,password) VALUES ('$name','$mail','$password')";
        $user_query_run=mysqli_query($conn,$user_query);
        $_SESSION['status']="LOGIN SUCCESSFULLY";
        

    }
    else
    {
        echo"failed";

    }

}
if(isset($_POST['submit_btn']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $travel=$_POST['travel'];
   
    $travelling=$_POST['travelling'];
    $allyes=$_POST['allyes'];


    $query="INSERT INTO enquiry (fname,lname,contact,email,travel,travelling,allyes) 
    VALUES ('$fname','$fname',' $contact','$email','$travel','$travelling','$allyes')";
    $query_run=mysqli_query($conn,$query);

    if($query_run) {
        header("location:enquiry.html");
    }
    else {
        echo "Error 404: Submission Error ";
    }
}

?>