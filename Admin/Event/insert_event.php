<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Event
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
    <h1 style="text-align: center;">Insert New Event</h1>
    <a href="manage_event.php"><button>Home</button></a>
    <table style="border-collapse:collapse;">
        <form action="insert_event.php" method="post" enctype="multipart/form-data">
            <!-- <tr>
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr> -->
            <tr>
                <td>Event Name : </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Event Subject : </td>
                <td><input type="text" name="sub"></td>
            </tr>
            <tr>
                <td>Event Venue</td>
                <td><input type="text" name="venue"></td>
            </tr>
            <tr>
                <td>Event Time</td>
                <td><input type="text" name="time"></td>
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
    $subject = $_POST['sub'];
    $venue = $_POST['venue'];
    $time = $_POST['time'];

    $sql = "insert into event(e_name,e_sub,e_venue,e_time) values('$name','$subject','$venue','$time')";

    $res = pg_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Inserted successfully')</script>";
    } else {
        echo "<script>alert('Cannot insert value')</script>";
    }
    session_destroy();
}                                                 


?>