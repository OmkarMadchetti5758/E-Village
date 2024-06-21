<?php

include("../database.php");
$sql = "select * from population";
$res = pg_query($conn,$sql);
if($res > 0)
{
    echo pg_last_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Hospital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
        body{
            font-family: Poppins;
            background: #f0f5f0;
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

        .table tr {
            height: 50px;
            border: 1px solid black;
        }

        .table td {
            width: 150px;
            text-align: center;
            /* border: 1px solid black; */
            border: 1px solid #a3a2a2;
            font-weight: 550;
            font-size: small;
        }

        .table .head {
            font-weight: bold;
            font-size: large;
            color: #27C46B;
        }

        table.table td a.add {
            color: #27C46B;
        }

        table.table td a.edit {
            color: #FFC107;
            cursor: pointer;
            margin-right: 20px;
        }
        table.table td a.edit:hover{
            color: black;
        }

        table.table td a.delete {
            color: #E34724;
            cursor: pointer;
        }
        table.table td a.delete:hover{
            color: black;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table td a.add i {
            font-size: 26px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }
        .button{
            display: flex;
            justify-content: end;
            justify-content: space-evenly;
            margin-left: 70px;
        }

        .back button {
            margin-top: 20px;
            margin-bottom: 30px;
            margin-left: 1100px;
            background-color: black;
            border: none;
            border-radius: 5px;
            width: 100px;
            height: 30px;
            font-weight: bold;
            color: burlywood;
        }
        .back button:hover {
            background-color: red;
            color: black;
            scale: 1.03;
        }

        #reg 
        {
            position: relative;
            top:-6px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; margin-bottom:10px;margin-top:10px;color:#27C46B;">Population Table</h1>
    <div class="button">
        <!-- <a class="add-new" title="Add" data-toggle="tooltip" href="insert.php"><button><i class="material-icons">&#xE03B;</i><span id="reg">Add new</span></button></a> -->
        <a class="back" href="../dashboard.php"><button>Admin Page</button></a>
    </div>
    <center>
        <table border="1px solid black" style="border-collapse:collapse;border:none" class="table">
            <tr>
                <td class="head">Sr. No.</td>
                <td class="head">Hospital Name</td>
                <td class="head">Hospital Time</td>
                <td class="head">Day Closed</td>
                <td class="head">Address</td>
                <td class="head">Location</td>
                <td class="head">About</td>
                <td class="head">Image</td>
                <!-- <td class="head">Action</td> -->
            </tr>
            <?php
            $i = 1;
            while ($row = pg_fetch_row($res)) {

            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <!-- <td> -->
                        <!-- <a class="edit" href="update.php?id=<?php echo $row[0];?>&name=<?php echo $row[1];?>&time=<?php echo $row[2];?>&close=<?php echo $row[3];?>&address=<?php echo $row[4];?>&location=<?php echo $row[5];?>&about=<?php echo $row[6];?>&img=<?php echo $row[7];?>"><i class="material-icons">&#xE254;</i></a> -->
                        <!-- <a class="delete" href="delete_hospital.php?id=<?php echo $row[0];?>"><i class="material-icons">&#xE872;</i></a> -->
                    <!-- </td> -->
                </tr>
            <?php } ?>
        </table>
    </center>
    <br><br>
</body>
</html>