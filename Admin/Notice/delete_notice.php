<?php 

include('../database.php');
$id = $_GET['id'];
$sql = "delete from notice where n_id=$id";
$res = pg_query($conn,$sql);
if($res > 0)
{
    pg_last_error();
}
else{
    header('Location: manage_notice.php');
}

?>