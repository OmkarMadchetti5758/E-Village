<?php

include('../database.php');
$id = $_GET['admin_id'];
$sql = "delete from admin_login where admin_id=$id";
$res = pg_query($conn,$sql);
if($res>0)
{
    pg_last_error();
}
else{
    echo "<script>var c = window.confirm('Really want delete');if(c==true){alert('Deleted Success');}</script>";
    header('Location: show_admin.php');
}

?>