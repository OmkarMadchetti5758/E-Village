<?php
include('../database.php');
if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $time = $_POST['time'];
        $close = $_POST['close'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $about = $_POST['about'];
        $sql = "update hospital set name='$name',time='$time',closed='$close',address='$address',location='$location',about='$about' where id=$id";
        $res = pg_query($conn,$sql);
        if($res>0)
        {
            echo pg_last_error();
        }
        else{
            echo "<script>alert('Updated Successful');</script>";
            header('Location: update_hospital.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hospital
    </title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        body{
            background: #f0f5f0;
        }
        input[type=number],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: seagreen;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: Kanit;
        }

        input[type=submit]:hover {
            background-color: seagreen;
        }

        .f1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        table{
            display: flex;
            justify-content: center;
            font-family: Kanit;
        }
    </style>
    <?php

        $id = $_GET['id'];
        $name = $_GET['name'];
        $time = $_GET['time'];
        $close = $_GET['close'];
        $address = $_GET['address'];
        $location = $_GET['location'];
        $about = $_GET['about'];

    ?>
</head>

<body>
    <h1 style="text-align: center;">Update Hospital</h1>
    <table style="border-collapse:collapse;">
        <form action="update.php" method="post">
            <tr>
                <td>ID</td>
                <td><input type="number" name="id" value="<?php echo $id?>" disabled></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name?>"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="text" name="time" value="<?php echo $time?>"></td>
            </tr>
            <tr>
                <td>Closed</td>
                <td><input type="text" name="close" value="<?php echo $close?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address?>"></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location" value="<?php echo $location?>"></td>
            </tr>
            <tr>
                <td>About</td>
                <td><input type="text" name="about" value="<?php echo $about?>"></td>
            </tr>
            <tr><td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>

</html>