<?php

include('../E-Village/Admin/database.php');

if(isset($_POST['login']))
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $sql = "select * from admin_login where a_name='$uname'";
    $res = pg_query($conn,$sql);
    $login_exists = pg_fetch_assoc($res);
    if($login_exists)
    {
        if(password_verify($pass,$login_exists['a_pass']))
        {
            session_start();
            $_SESSION['name']=$uname;
            $_SESSION['pass']=$pass;
            $_SESSION['Login']=true;
            echo '<script type="text/javascript">alert("Login success")</script>';
            header("Location: http://localhost/E-Village/Admin/dashboard.php");
            exit();
        }
        else{
            echo "<script>window.alert('Password Does not match')</script>";
            header("Location: http://localhost/E-Village/Login/Login.html");
        }
    }
    else
    {
        echo "<script>alert('Username Does not match')</script>";
        header("Location: http://localhost/E-Village/Login/Login.html");
    }
}

?>