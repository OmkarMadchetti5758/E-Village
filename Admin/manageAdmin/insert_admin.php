<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Hospital
    </title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        body
        {
            font-family: Kanit;
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

        input[type=password],
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
            color: black;
            font-weight: bold;
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
    <h1 style="text-align: center;">Insert New Admin</h1>
    <a href="show_admin.php"><button>Back</button></a>
    
    <table style="border-collapse:collapse;">
        <form action="insert_admin.php" method="post" enctype="multipart/form-data">
            <!-- <tr>
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr> -->
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
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
    $pass = $_POST['pass'];
    $passhash= password_hash($pass,PASSWORD_DEFAULT);

    $sql = "insert into admin_login(a_name,a_pass) values('$name','$passhash')";

    $res = pg_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Inserted successfully')</script>";
    } else {
        echo "Cannot Insert";
    }
    session_destroy();
}                                                 


?>