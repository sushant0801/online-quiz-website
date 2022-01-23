alogincode.php
<?php

session_start();
include ('adminconnection.php');

if(isset($_POST['login_btn'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM adminlogin WHERE user_name = '$name' AND user_password= '$password' LIMIT 1";

    $log_query_run = mysqli_query($conn, $log_query);

    if(mysqli_num_rows($log_query_run) > 0) {
        foreach($log_query_run as $row){
            $user_id =$row['id'];
            $user_name =$row['name'];
            $user_password =$row['password'];
        }

        //$_SESSION['auth']= "$user_role";
        
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_password'=>$user_password,
           
        ];   

        $_SESSION['status']= "Logged In Successfully";
        header('location: database.php');
    }
    else {
        $_SESSION['status']= "Invalid Email or Password";
        echo "Hii";
        header('location: loginadmin.html');
    }
}
else {
    $_SESSION['status']= "Access Denied";
    echo "Hiii";
    header('location:loginadmin.html');

}