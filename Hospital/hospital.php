<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

    <?php

    // $db = pg_connect("dbname=evillage user=postgres password=redhat") or die("Cannot connect");
    include('../Admin/database.php');
    $sql = "select * from hospital order by id";
    $res = pg_query($conn, $sql);

    if ($res > 0) {
        echo pg_last_error();
    }

    ?>
    <style>
        /* @import url("https://fonts.googleapis.com/css?family=Kanit"); */

        * {
            margin: 0%;
            padding: 0;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.218);
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.5);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        body {
            box-sizing: border-box;
            /* font-family: "Kanit", sans-serif; */
            font-family: Lora;
            background-color: #f0f5f0;
            /* background-color: seagreen; */
        }

        .img {
            width: 100%;
            height: 135px;
            margin-bottom: -6px;
        }

        .navbar {
            height: 50px;
            width: 100%;
            background-color: rgb(24, 24, 24);
        }

        .dropdown {
            color: white;
            display: flex;
            position: relative;
        }

        .menu-bar {
            background: #333;
            text-align: center;
        }

        .menu-bar ul {
            display: flex;
            margin-left: 20px;
            margin-right: 30px;
            list-style: none;
            color: #0a0a0a;
            transition: 0.5s;
            position: relative;
        }

        .menu-bar ul li {
            width: 120px;
            margin: 0px;
            padding: 15px;
            transition: 0.5s;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.879);
        }

        .menu-bar ul li a:hover {
            color: seagreen;
        }

        .sub-menu-1 {
            display: none;
            z-index: 1;
        }

        .menu-bar ul li:hover .sub-menu-1 {
            display: block;
            position: absolute;
            background: #333;
            margin-top: 15px;
            margin-left: -15px;
        }

        .menu-bar ul li:hover .sub-menu-1 ul {
            display: block;
            margin: 10px;
        }

        .menu-bar ul li:hover .sub-menu-1 ul li {
            width: 80px;
            padding: 10px;
            border-bottom: 1px solid #ffffffa2;
            background: transparent;
            text-align: center;
        }

        .menu-bar ul li:hover .sub-menu-1 ul li:last-child {
            border-bottom: none;
        }

        .menu-bar ul li:hover .sub-menu-1 ul li a:hover {
            color: seagreen;
        }

        .navbar .dropdown a {
            font-family: 'Segoe UI', Tahoma, Calibri, Verdana, sans-serif;
            text-decoration: none;
            color: white;
            text-align: center;
            margin-top: 13px;
            margin-left: 69px;
            margin-right: 10px;
        }

        .navbar .dropdown a:hover {
            color: seagreen;
        }

        /* Top Button */
        .top {
            margin-left: 1280px;
            margin-top: 25px;
            margin-bottom: 30px;
            width: 40px;
            height: 40px;
            border-radius: 80px;
            border: none;
            font-size: 30px;
            position: fixed;
            bottom: -10px;
            right: 15px;
            z-index: 1;
        }

        button {
            background-color: #D3F8E1;
            cursor: pointer;
        }

        button:hover {
            background-color: seagreen;
            color: white;
        }

        .top a {
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color: black;
        }

        /* Hospitals */

        .box {
            /* background-color: #D3F8E1; */
            /* background-color: #b6f5ce; */
            border: 1px solid seagreen;
            height: inherit;
            border-radius: 10px;
            grid-template-rows: 1fr;
            grid-template-columns: 1fr 1fr 1fr;
            margin: 50px;
            margin-top: -10px;
            transition: ease-in-out 0.5s;
            padding-bottom: 20px;
        }

        .box:hover {
            /* background-color: #b6f5ce; */
            scale: 1.006;
            box-shadow: 5px 5px 15px #6d6d6d;
        }

        .location button {
            width: 100px;
            height: 30px;
            border: 1px solid seagreen;
            border-radius: 50px;
        }

        /*image*/
        .pic {
            position: relative;
            height: 220px;
            margin-top: 30px;
            margin-left: -80px;
            border-radius: 30px;
            transition: ease-in-out 0.5s;
        }

        /* .pic:hover {
            scale: 1.02;
            box-shadow: 0 5px 10px rgb(134, 150, 165, 0.4);
        } */

        img {
            float: left;
            width: 350px
        }

        td {
            padding: 10px;
            text-align: left;
            padding-left: 50px;
        }

        /* about */
        #about {
            display: grid;
            grid-template-columns: 10fr 1fr 10fr;
            background-color: black;
        }

        #about-section {

            position: relative;
            height: 400px;
        }

        #about-section h2 {
            padding-top: 30px;
            text-align: center;
            color: seagreen;
            text-align: left;
            margin-left: 15px;
        }

        #about-section p {
            margin-top: 30px;
            text-align: center;
            justify-content: baseline;
            color: rgba(255, 255, 255, 0.827);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 100;
            text-align: left;
            margin-left: 40px;
        }

        #about-section .contact-us {
            margin-top: 20px;
            text-align: center;
            text-align: left;
        }

        #about-section .contact-us a {
            text-decoration: none;
            color: white;
        }

        #about-section .contact-us a:hover {
            color: seagreen;
        }

        .map {
            color: white;
        }
        .map #about-section iframe{
            margin-left: 60px;
            margin-top: 30px;
        }

    </style>

</head>

<body>
    <div style="display: inline-block;">
        <img src="../Images/EvillageBanner.jpg" class="img">
    </div>
    <div class="menu-bar">
        <ul>
            <li><a href="../Home/home.php">Home</a></li>
            <li><a href="../Home/home.php#info">Info</a></li>
            <li><a href="../School/school.php">Schools</a></li>
            <li><a href="#" style="color: seagreen;">Hospitals</a></li>
            <li><a href="../Gallery/gallery.php">Gallery</a></li>
            <li><a href="../Scheme/scheme.php">Scheme</a></li>
            <li><a href="../Events/events.php">Event</a></li>
            <li><a href="../Notice/notice.php">Notice</a></li>
            <li>
                <a href="../Home/home.php#about">About Us</a>
            </li>
            <li><a href="../Login/Login.html">Login</a></li>
        </ul>
    </div>

    <br>
    <section style="margin-top: 20px;">
        <?php

        while ($row = pg_fetch_row($res)) {

        ?>
            <center>
                <div class="box">

                    <table style="border-collapse:collapse;text-align: center;width:80%">
                        <tr>
                            <th colspan="3" style="height: 50px;padding-top: 10px;">
                                <h2 style="color: seagreen;"><?php echo $row[1] ?></h2>
                            </th>
                        </tr>
                        <tr>
                            <td rowspan="3" style="padding-top: 20px;">
                                <img src="<?php echo '../Admin/Hospital/hospital_img/' . $row[7]; ?>" class="pic" style="box-shadow: 0 5px 10px rgb(134, 150, 165, 0.4);">

                            </td>
                            <td style="padding-top: 10px;">
                                <div class="time">
                                    <h3>Timings:</h3>
                                    <p><b>Mon-Sat : </b><?php echo $row[2] ?></p>
                                </div>
                            </td>
                            <td>
                                <div class="address">
                                    <h3>Address:</h3>
                                    <p><?php echo $row[4] ?></p>
                                </div>
                            </td>
                        <tr>
                            <td>
                                <div class="closed">
                                    <h3>Closed:</h3>
                                    <p><?php echo $row[3] ?></p>
                                </div>
                            </td>
                            <td>
                                <div class="location">
                                    <a href="https://maps.app.goo.gl/DgZQdK1AfmTNX5zU7" target="_blank">
                                        <button>
                                            <p><i class="fa fa-location-dot"></i> Korchi</p>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="about">
                                    <h3>About:</h3>
                                    <p><?php echo $row[6] ?></p>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    </table>

            </center>
            </div>
        <?php
        }
        pg_close($conn);
        ?>
    </section>
    <button class="top" id="js-top">&uarr;</button>
    <section id="about">
        <div id="about-section">
            <h2>About Us</h2>
            <p>Welcome to our E-Village website! Know more About your village. Feel free to navigate the Website. We hope
                you enjoy the visual journey!</p>

            <h2>Contact Us</h2>
            <p class="contact-us">
                Address : Baburaoji Gholap College,Sangvi,Pune-27.
            </p>
            <p class="contact-us">
                Telephone no. : 080-12345678 .
            </p>
            <p class="contact-us">
                Email : maharashtra@gov.in
            </p>
            <p class="contact-us">
                Website : <a href="../Home/home.html">https://rdpr.maharashtra.gov.in/</a>
            </p>
        </div>
        <div>
            <p></p>
        </div>
        <div class="map">
            <div id="about-section">
                <h2>Location : </h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7463.668462667986!2d80.46601008881942!3d20.716955008563254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2c0cbbf3964e0b%3A0x82ab4bc13f896cd3!2sKorchi%2C%20Maharashtra%20441209!5e0!3m2!1sen!2sin!4v1712208113509!5m2!1sen!2sin" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <script src="../index.js"></script>
</body>

</html>