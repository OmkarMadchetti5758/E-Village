<?php
include('../database.php');
if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $board = $_POST['board'];
        $course = $_POST['course'];
        $address = $_POST['address'];
        $about = $_POST['about'];
        $sql = "update school set s_name='$name',s_board='$board',s_course='$course',s_address='$address',s_about='$about' where s_id=$id";
        $res = pg_query($conn,$sql);
        if($res>0)
        {
            echo pg_last_error();
        }
        else{
            echo "<script>alert('Updated Successful');</script>";
            // header('Location: manage_school.php');
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

        $id = $_GET['s_id'];
        $name = $_GET['s_name'];
        $board = $_GET['s_board'];
        $course = $_GET['s_course'];
        $address = $_GET['s_address'];
        $about = $_GET['s_about'];

    ?>
</head>

<body>
    <h1 style="text-align: center;">Update School</h1>
    <table style="border-collapse:collapse;">
        <form action="update_school.php" method="post">
            <tr>
                <td>School ID</td>
                <td><input type="number" name="id" value="<?php echo $id?>" disabled></td>
            </tr>
            <tr>
                <td>School Name</td>
                <td><input type="text" name="name" value="<?php echo $name?>"></td>
            </tr>
            <tr>
                <td>School Board</td>
                <td><input type="text" name="board" value="<?php echo $board?>"></td>
            </tr>
            <tr>
                <td>School Courses</td>
                <td><input type="text" name="course" value="<?php echo $course?>"></td>
            </tr>
            <tr>
                <td>School Address</td>
                <td><input type="text" name="address" value="<?php echo $address?>"></td>
            </tr>
            <tr>
                <td>School About</td>
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