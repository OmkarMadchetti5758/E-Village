<?php

include('../database.php');

$sql = "select * from gallery order by id";
$res = pg_query($conn, $sql);
if ($res > 0) {
    echo pg_last_error();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Gallery</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");

        body {
            font-family: Poppins;
            background: #f0f5f0;
        }

        button a {
            color: red;
        }

        button a:hover {
            color: green;
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
            border: 1px solid #a3a2a2;
            font-weight: 550;
            font-size: small;
        }

        .table .head {
            font-weight: bold;
            color: #27C46B;
        }

        table.table td a.add {
            color: #27C46B;
        }

        table.table td a.edit {
            color: black;
            cursor: pointer;
            margin-right: 20px;
        }

        table.table td a.edit:hover {
            color: yellow;
        }

        table.table td a.delete {
            color: black;
            cursor: pointer;
        }

        table.table td a.delete:hover {
            color: red;
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

        .pic {
            width: 200px;
            border-radius: 10px;
            margin: 30px;
        }

        .add-new button {
            margin-left: 940px;
            margin-top: 20px;
            margin-bottom: 30px;
            background-color: black;
            border: none;
            border-radius: 5px;
            width: 100px;
            height: 30px;
            color: burlywood;
        }

        .add-new button:hover {
            background-color: #27C46B;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }

        .button {
            display: flex;
            justify-content: end;
            justify-content: space-evenly;
            margin-left: 70px;
        }

        .back button {
            margin-top: 20px;
            margin-bottom: 30px;
            margin-left: -10px;
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

        #reg {
            position: relative;
            top: -6px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; margin-bottom:10px;margin-top:10px;color:#27C46B">Manage Gallery</h1>
    <div class="button">
        <a class="add-new" title="Add" data-toggle="tooltip" href="insert_img.php"><button><i class="material-icons">&#xE03B;</i><span id="reg">Add new</span></button></a>
        <a class="back" href="../dashboard.php"><button>Admin Page</button></a>
    </div>
    <center>
        <table border="1px solid black" style="border-collapse: collapse;border:none;" class="table">
            <tr>
                <td class="head">Sr. no.</td>
                <td class="head">Event</td>
                <td class="head">Image</td>
                <td class="head">Action</td>
            </tr>
            <?php

            $i = 1;
            while ($row = pg_fetch_row($res)) {
            ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><img src="<?php echo './Image/' . $row[2]; ?>" class="pic"></td>

                    <td>
                        <!-- <a class="edit" href="update_img.php?id=<?php echo $row[0] ?>"><i class="material-icons">&#xE254;</i></a> -->
                        <a class="delete" href="delete_img.php?id=<?php echo $row[0] ?>"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </center>
</body>

</html>