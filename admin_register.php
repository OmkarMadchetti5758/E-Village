<?php

include('./Admin/database.php');
if(isset($_POST['register']))
{
$name = $_POST['aname'];
$pass = $_POST['pass'];
$re_pass = $_POST['re-pass'];
$pass_hash = password_hash($pass,PASSWORD_DEFAULT);

$sql_check = "select * from admin_login where a_name='$name'";
$res_check = pg_query($conn,$sql_check);
$admin_check = pg_fetch_assoc($res_check);
if($admin_check)
{
    if($name == $admin_check['a_name'])
    {
        echo '<html><script>alert("Admin already Exists");</script></html>';
        header("Location: http://localhost/E-Village/Register/Register_admin.html");
    }
}
else{
    if ($pass === $re_pass) 
    {
        $sql = "insert into admin_login(a_name,a_pass) values('$name','$pass_hash')";
        $res = pg_query($conn, $sql);
        if (!$res) {
            echo "cannot insert";
        } else {
            echo "<script>alert('Registered Successfully')</script>";
            header("Location: http://localhost/E-Village/Login/Login.html");
            exit();
        }
    } 
}
pg_close($conn);
}
?>
