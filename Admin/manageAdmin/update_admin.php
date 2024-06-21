<?php
include('../database.php');
if (isset($_POST['submit'])) {
    $aname = $_POST['name'];
    $apass = $_POST['pass'];
    $passhash = password_hash($apass, PASSWORD_DEFAULT);
    $sql = "update admin_login set a_name='$aname',a_pass='$apass' where admin_id=$admin_id";
    $res = pg_query($conn, $sql);
    if ($res > 0) {
        echo pg_last_error();
    } else {
        echo "<html><script>alert('Updated Successful');</script></html>";
        header('Location: show_admin.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin Detail</title>
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
            background-color: black;
            color: seagreen;
            font-weight: bold;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: seagreen;
            color: black;
            font-weight: bold;
            scale: 1.03;
        }

        input[type=submit]:hover {
            background-color: seagreen;
        }

        .f1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        table {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            font-family: Kanit;
        }
        .back button{
            margin-left: 1200px;
            margin-top: 10px;
            margin-bottom: 10px;
            color: white;
            background-color: black;
            border: none;
            border-radius: 5px;
            width: 100px;
            height: 30px;
            font-weight: bold;
            color: red;
        }
        .back button:hover{
            background-color: red;
            color: black;
            scale: 1.03;
        }
    </style>
    <?php
    $id = $_GET['admin_id'];
    $name = $_GET['a_name'];
    $pass = $_GET['a_pass'];
    ?>
</head>

<body>
    <h1 style="text-align: center;">Update Admin Details</h1>
    <a class="back" href="show_admin.php"><button>Admin Page</button></a>
    <table style="border-collapse:collapse;">
        <form action="update_admin.php" method="post">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name ?>"></td>
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