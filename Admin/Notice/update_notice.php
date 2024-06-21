<?php

include("../database.php");
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $title = $_POST['title'];
    $file = $_GET['file'];
    $issue = $_GET['issue'];
    $last = $_GET['last'];
    $sql = "update notice set n_title = '$title',file='$file',n_issued='$issue',n_lastd='$last' where n_id='$id'";
    $res = pg_query($conn,$sql);
    if($res > 0)
    {
        echo pg_last_error();
    }
    else{
        echo "<script>alert('Updated Successful');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Notice</title>
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
        $title = $_GET['title'];
        $file = $_GET['file'];
        $issue = $_GET['issue'];
        $last = $_GET['last'];
    ?>
</head>
<body>
<h1 style="text-align: center;">Update Notice</h1>
    <table style="border-collapse:collapse;">
        <form action="update_school.php" method="post">
            <tr>
                <td>School ID</td>
                <td><input type="number" name="id" value="<?php echo $id?>" disabled></td>
            </tr>
            <tr>
                <td>Notice Title</td>
                <td><input type="text" name="title" value="<?php echo $title?>"></td>
            </tr>
            <!-- <tr>
                <td>Notice File</td>
                <td><input type="file" name="file" value="<?php echo $file?>"></td>
            </tr> -->
            <tr>
                <td>Issue Date</td>
                <td><input type="date" name="issue" value="<?php echo $issue?>"></td>
            </tr>
            <tr>
                <td>Last Date</td>
                <td><input type="date" name="last" value="<?php echo $last?>"></td>
            </tr>
            <tr><td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>
</html>