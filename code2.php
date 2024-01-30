<?php
session_start();
include("config/dbcon.php");
if(isset($_GET['sub']))
{
    $email = $_GET['email'];
    $password = $_GET['password'];

    $user_query ="SELECT email , password FROM admins";
    $user_query_run = mysqli_query($con, $user_query);

    if ($user_query_run) 
    {
        $_SESSION['status'] = "Login Successfully";
        header("Location: dashboard.php");

    }else
    {
        $_SESSION['status'] = "Login Failed";
        header("Location: login.php");

    } 
}
