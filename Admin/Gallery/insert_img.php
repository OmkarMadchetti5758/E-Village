<html>
<head>
    <title>Insert new Image</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        
        body{
            background: #f0f5f0;
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
            color: black;
            font-weight: bold;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: ease-in-out 0.3s;
        }

        input[type=submit]:hover {
            background-color: black;
            color: seagreen;
        }

        input[type=file]
        {
            margin-top: 20px;
            height: 35px;
            font-family: Kanit;
        }

        table {
            display: flex;
            justify-content: center;
            font-family: Kanit;
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
    <h1 style="text-align: center;font-family:Kanit;">Insert New Image</h1>
    <a href="manage_gal.php"><button>Back</button></a>
    <table style="border-collapse:collapse;">
        <form action="insert_img.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>Event name</td>
                <td><input type="text" name="name"></td>
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
if(isset($_POST['submit']))
{
    $ename = $_POST['name'];
    $img = $_POST['image'];

    $file_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];

    $sql = "insert into gallery(event,image) values('$ename','$file_name');";

    $res = pg_query($conn,$sql);

    if($res)
    {
        echo "<script>alert('Inserted successfully')</script>";
        if(move_uploaded_file($temp_name,"Image/".$file_name))
        {
            echo "<script>alert('Image Uploaded successfully')</script>";
            header('Location: manage_gal.php');
        }
        else{
            echo "<script>alert('Image not Uploaded');</script>";
        }
    }
    else{
        echo "<script>alert('Cannot Insert Data');</script>";
    }
}

?>