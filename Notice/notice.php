<?php

include('../Admin/database.php');
$sql = "select * from notice";
$res = pg_query($conn, $sql);
if ($res > 0) {
    pg_last_error();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notices</title>
    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");

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
            font-family: Lora;
            /* background-color: seagreen; */
            background-color: #f0f5f0;
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

        h1 {
            margin-top: 30px;
            text-align: center;
            font-size: 30px;
            color: seagreen;
        }

        .notices {
            width: 90%;
            margin: 80px;
            margin-left: 100px;
            margin-top: -20px;
            display: grid;
            grid-template-columns: repeat(3, 2fr);
        }

        .notice {
            position: relative;
            height: inherit;
            width: 330px;
            margin-top: 70px;
            border: 1px solid seagreen;
            background-color: #D3F8E1;
            border-radius: 10px;
            padding-bottom: 20px;
            box-shadow: 3px 3px 10px #6d6d6d;
        }

        .notice #title {
            text-align: center;
            margin-top: 15px;
            color: seagreen;
        }

        .notice #sr {
            margin-top: 15px;
            text-align: left;
            margin-left: 15px;
        }

        .notice #download button {
            margin-top: 25px;
            margin-left: 115px;
            border: 1px solid seagreen;
            border-radius: 5px;
            width: 100px;
            height: 28px;
            color: seagreen;
            font-weight: bold;
        }

        .notice #download button:hover {
            color: white;
            background-color: seagreen;
        }

        .notice #date {
            margin-top: 15px;
            margin-left: 70px;
            color: seagreen;
        }

        /*Top button */
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
            background-color: rgba(255, 255, 255, 0.827);
            cursor: pointer;
        }

        button:hover {
            background-color: seagreen;
        }

        .top a {
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color: black;
        }

        .top a:hover {
            text-decoration: none;
        }

        .show {
            visibility: visible;
            opacity: 1;
        }

        .hide {
            visibility: hidden;
            opacity: 0;
        }

        /*About Section */
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

    <div>
        <img src="../Images/EvillageBanner.jpg" class="img">
    </div>
    <div class="menu-bar">
        <ul>
            <li><a href="../Home/home.php">Home</a>
            </li>
            <li><a href="../Home/home.php#info">Info</a>
            </li>
            <li><a href="../School/school.php">Schools</a>
            </li>
            <li><a href="../Hospital/hospital.php">Hospitals</a>
            </li>
            <li><a href="../Gallery/gallery.php">Gallery</a>
            </li>
            <li><a href="../Scheme/scheme.php">Scheme</a>
            </li>
            <li><a href="../Events/events.php">Event</a>
            </li>
            <li><a href="../Notice/notice.php" style="color: seagreen;">Notice</a></li>
            <li><a href="../Home/home.php#about">About Us</a></li>
            <li>
                <?php

                if (!isset($_SESSION['Login'])) { ?>
                    <a href="#">Login</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="../Login/Login.html">Admin</a></li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <a href="../Login/Login.html">Logout</a>
                <?php
                    session_destroy();
                }
                ?>
            </li>
        </ul>
    </div>

    <h1> Notices </h1>


    <div class="notices">
        <!-- <div class="notice">
            <h3 id="sr">1</h3>
            <h3 id="title">Lorem ipsum dolor sit.</h3>
            <a href="#" id="download"><button>Download</button></a>
            <h4 id="date">Issue Date : </h4>
            <h4 id="date">Last Date : </h4>
        </div> -->
        <?php
        $i = 0;
        while ($row = pg_fetch_row($res)) {
            $i++;
        ?>
            <div class="notice">
                <h3 id="sr"><?php echo $i; ?></h3>
                <h3 id="title"><?php echo $row[1]; ?></h3>
                <a href="../Admin/Notice/File/<?php echo $row[2]; ?>" download id="download"><button>Download</button></a>
                <h4 id="date">Issue Date : <?php echo $row[3]; ?></h4>
                <h4 id="date">Last Date : <?php echo $row[4]; ?></h4>
            </div>
        <?php } ?>
    </div>


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