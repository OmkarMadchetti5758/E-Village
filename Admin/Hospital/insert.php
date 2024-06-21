<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Hospital
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
            font-family: Kanit;
        }

        input[type=file],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 5px 0;
            display: inline-block;
            font-family: Kanit;
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
            font-family: Kanit;
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
            transition: 0.5s;
        }

        input[type=submit]:hover {
            background-color: black;
            color: seagreen;
        }

        .f1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        table {
            display: flex;
            justify-content: center;
        }
        button{
            margin-left: 1200px;
            color: white;
            background-color: red;
            border: none;
            border-radius: 5px;
            width: 80px;
            height: 30px;
            font-weight: bold;
            color: black;
            transition: ease-in-out 0.3s;
        }
        button:hover{
            background-color: black;
            color: red;
            font-weight: bold;
            scale: 1.03;
        }
        td{
            font-family: Kanit;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Insert New Hospital</h1>
    <a href="update_hospital.php"><button>Home</button></a>
    <table style="border-collapse:collapse;">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <!-- <tr>
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr> -->
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="text" name="time"></td>
            </tr>
            <tr>
                <td>Closed</td>
                <td><input type="text" name="close"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location"></td>
            </tr>
            <tr>
                <td>About</td>
                <td><input type="text" name="about"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>

</html>

<?php

include('../database.php');

if (isset($_POST['submit'])) {
    session_start();
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $time = $_POST['time'];
    $closed = $_POST['close'];
    $address = $_POST['address'];
    $about = $_POST['about'];
    $location = $_POST['location'];
    $img = $_POST['image'];

    $file_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];

    $sql = "insert into hospital(name,time,closed,address,location,about,img) values('$name','$time','$closed','$address','$location','$about','$file_name')";

    $res = pg_query($conn, $sql);

    if ($res > 0) {
        echo "<script>alert('Inserted successfully')</script>";
        if(move_uploaded_file($temp_name,"hospital_img/".$file_name))
        {
            echo "<script>alert('File Uploaded success');</script>";
        }
        else{
            echo "<script>alert('File not Uploaded');</script>";
        }
    } else {
        echo "Cannot Insert";
    }
    session_destroy();
}                                                 


?>