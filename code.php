<?php
session_start();
include("config/dbcon.php");
if(isset($_POST['addUser']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_query ="INSERT INTO admins (name,email,password) VALUES('$name','$email','$password')";
    $user_query_run = mysqli_query($con, $user_query);

    if ($user_query_run) 
    {
        $_SESSION['status'] = "User Added Successfully";
        header("Location: dashboard.php");

    }else
    {
        $_SESSION['status'] = "User Registration Failed";
        header("Location: registration.php");

    } 
}

?>