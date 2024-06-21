<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Notice
    </title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        body{
            background: #f0f5f0;
        }
        td{
            font-family: Kanit;
        }
        input[type=file],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 5px 0;
            display: inline-block;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Kanit;
        }

        input[type=date],
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
    </style>
</head>

<body>
    <h1 style="text-align: center;">Insert New Notice</h1>
    <a href="manage_notice.php"><button>Home</button></a>
    <table style="border-collapse:collapse;">
        <form action="insert_notice.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td>Notice Title : </td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Notice File : </td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td>Issues Date : </td>
                <td><input type="date" name="idate"></td>
            </tr>
            <tr>
                <td>Last Date : </td>
                <td><input type="date" name="ldate"></td>
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
    $title = $_POST['title'];
    // $file = $_GET['file'];
    $issue_date = $_POST['idate'];
    $last_date = $_POST['ldate'];
    $file = $_POST['file'];

    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];

    $sql = "insert into notice(n_title,file,n_issued,n_lastd) values('$title','$file_name','$issue_date','$last_date')";

    $res = pg_query($conn, $sql);

    if ($res > 0) {
        echo "<script>alert('Cannot insert')</script>";
    } else {
        echo "<script>alert('Inserted successfully')</script>";
        if(move_uploaded_file($temp_name,"File/".$file_name))
        {
            echo "<script>alert('File Uploaded success');</script>";
        }
        else{
            echo "<script>alert('File not Uploaded');</script>";
        }
    }
    session_destroy();
}                                                 


?>