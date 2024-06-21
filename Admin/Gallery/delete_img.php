<?php

include('../database.php');

$id = $_GET['id'];
$sql = "delete from gallery where id=$id";
$res = pg_query($conn,$sql);

if($res)
{
    echo "<script>alert('Image Deleted Successfully');</script>";
    header('Location: manage_gal.php');
}
else{
    echo "<script>alert('Cannot Delete Image');</script>";
}

?>