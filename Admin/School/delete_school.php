<?php

include('../database.php');
$id = $_GET['s_id'];
$sql = "delete from school where s_id=$id";
$res = pg_query($conn,$sql);
if($res>0)
{
    pg_last_error();
}
else{
    echo "<script>var c = window.confirm('Really want delete');if(c==true){alert('Deleted Success');}</script>";
    header('Location: manage_school.php');
}

?>