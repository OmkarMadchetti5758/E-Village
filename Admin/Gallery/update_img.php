<!-- <html>
<head>
    <title>Update Image</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        

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
            font-family: Kanit;
        }

        input[type=submit]:hover {
            background-color: seagreen;
            scale: 1.03;
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
    </style>
    <!-- <?php 
    
    $id = $_GET['id'];
    $ename = $_GET['ename'];
    $img = $_GET['image'];
    
    ?> -->
</head>
<body>
    <h1 style="text-align: center;font-family:Kanit;">Update Image</h1>
    <button><a href="manage_gal.php">Home</a></button>
    <table style="border-collapse:collapse;">
        <form action="insert_img.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>Event name</td>
                <td><input type="text" name="ename"></td>
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
</html> -->

<?php

// include('../database.php');
// if(isset($_POST['submit']))
// {
//     $id = $_POST['id'];
//     $ename = $_POST['ename'];
//     $img = $_POST['image'];

//     $file_name = $_FILES['image']['name'];
//     $temp_name = $_FILES['image']['tmp_name'];

//     $sql = "update gallery(name,image) set name='$ename',image='$file_name' where id=$id";

//     $res = pg_query($conn,$sql);

//     if($res)
//     {
//         echo "<script>alert('Updated Successfully');</script>";
//         if(move_uploaded_file($temp_name,'./Image/'.$file_name))
//         {
//             echo "<script>alert('Image Uploaded successfully')</script>";
//             header('Location: manage_gal.php');
//         }
//         else{
//             echo "<script>alert('Image not Uploaded');</script>";
//         }
//     }
//     else{
//         echo "<script>alert('Cannot Update Image');</script>";
//     }
// }

?>
