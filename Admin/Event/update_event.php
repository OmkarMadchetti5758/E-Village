<?php
include('../database.php');
if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $subject = $_POST['sub'];
        $venue = $_POST['venue'];
        $time = $_POST['time'];
        $sql = "update event set e_name='$name',e_sub='$subject',e_venue='$venue',e_time='$time' where e_id=$id";
        $res = pg_query($conn,$sql);
        if($res>0)
        {
            echo pg_last_error();
        }
        else{
            echo "<script>alert('Updated Successful');</script>";
            header('Location: update_event.php');
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

        $id = $_GET['e_id'];
        $name = $_GET['e_name'];
        $sub = $_GET['e_sub'];
        $venue = $_GET['e_venue'];
        $time = $_GET['e_time'];

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
                <td>Event name</td>
                <td><input type="text" name="name" value="<?php echo $name?>"></td>
            </tr>
            <tr>
                <td>Event subject </td>
                <td><input type="text" name="sub" value="<?php echo $sub?>"></td>
            </tr>
            <tr>
                <td>Event Venue</td>
                <td><input type="text" name="venue" value="<?php echo $venue?>"></td>
            </tr>
            <tr>
                <td>Event time</td>
                <td><input type="text" name="time" value="<?php echo $time?>"></td>
            </tr>
            <tr><td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>

</html>