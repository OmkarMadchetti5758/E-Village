<?php

include('../database.php');
$id = $_GET['e_id'];
$sql = "delete from event where e_id=$id";
$res = pg_query($conn,$sql);
if($res>0)
{
    pg_last_error();
}
else{
    echo "<script>var c = window.confirm('Really want delete');if(c==true){alert('Deleted Success');}</script>";
    header('Location: manage_event.php');
}

?>