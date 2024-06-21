<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

    <?php

        include('../Admin/database.php');
        $sql = "select * from school";
        $res = pg_query($conn,$sql);
        if($res>0)
        {
            echo pg_last_error();
        }  

    ?>
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
            /* font-family: "Kanit", sans-serif; */
            font-family: Lora;
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

        /* About  */
        #about {
            display: grid;
            grid-template-columns: 10fr 1fr 10fr;
            background-color: black;
            margin-top: 80px;
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
            background-color: #D3F8E1;
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
            color: white;
        }

        .top a {
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color: black;
        }

        .school {
            /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;   */
            text-align: center;
            /* background-color: #D3F8E1; */
            display: grid;
            grid-template-columns: 1fr 5fr;
            margin-left: 130px;
            margin-top: 90px;
            height: auto;
            width: 1100px;
            border-radius: 10px;
            border: 1px solid seagreen;
            transition: ease-in-out 0.5s;
            padding-bottom: 10px;
        }

        .image {
            border-radius: 5px;
            margin: 35px;
            margin-top: 48px;
            height: 230px;
            width: 350px;
        }

        /* .content_p{
            display: inline-block;
        } */

        .content h2 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: left;
            margin-top: 20px;
            padding: 10px;
            color: seagreen;
        }

        .content h4 {
            color: seagreen;
            text-align: center;
            padding: 10px;
            text-align: left;
        }

        .content p {
            font-size: 18px;
            padding: 10px;
        }

        /* .course {
            margin-top: 10px;
            border: 1px solid gray;
            margin-right: 15px;
            border-radius: 5px;
            display: grid;
            grid-template-columns: 50fr 5fr;
        } */

        /* .course h4 {
            margin-left: 3%;
            margin-right: 97%;
            margin-top: 5px;
            margin-bottom: 5px;
            color: seagreen;
        } */

        /* .about {
            margin-top: 10px;
            border: 1px solid gray;
            border-radius: 5px;
            margin-right: 15px;
            display: grid;
            grid-template-columns: 50fr 5fr;

        }

        .about h4 {
            margin-left: 3%;
            margin-right: 97%;
            margin-top: 5px;
            margin-bottom: 5px;
            color: seagreen;
        } */

        #course-icon,
        #about-icon {
            margin-top: 17px;
            font-size: 15px;
        }

        #course-icon:hover,
        #about-icon:hover {
            cursor: pointer;
            color: seagreen;
        }

        .item,
        .about-item {
            margin-left: 10px;
            text-align: left;
        }

        .course ul {
            margin-left: 35px;
            margin-top: -10px;
        }

        .course ul li {
            font-size: 14px;
            text-align: left;
        }

        .about p {
            margin-top: -15px;
            text-align: left;
            margin-left: 10px;
            font-size: 14px;
        }
    </style>
    <script>
        // $(document).ready(function() {
        //     $('.courses').hide();
        //     $('.abt').hide();

        //     $('#course-icon').click(function() {
        //     $(this).toggleClass("fa fa-plus fa fa-minus");
        //     $('.courses').toggle();
        //     });

        //     $('#about-icon').click(function() {
        //     $(this).toggleClass("fa fa-plus fa fa-minus");
        //     $('.abt').toggle();
        //     });
        // });
    </script>

<body>
    <div>
        <img src="../Images/EvillageBanner.jpg" class="img">
    </div>
    <div class="menu-bar">
        <ul>
            <li><a href="../Home/home.php">Home</a></li>
            <li><a href="../Home/home.php#info">Info</a></li>
            <li><a href="#"  style="color: seagreen;">Schools</a></li>
            <li><a href="../Hospital/hospital.php">Hospitals</a></li>
            <li><a href="../Gallery/gallery.php">Gallery</a></li>
            <li><a href="../Scheme/scheme.php">Scheme</a></li>
            <li><a href="../Events/events.php">Event</a></li>
            <li><a href="../Notice/notice.php">Notice</a></li>
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
                <?php } ?>
            </li>
        </ul>
    </div>

    <div class="container">
        <!-- <div class="school">
            <div class="sch-img">
                <img src="../Images/new img1.jpg" class="image">
            </div>
            <div class="content">
                <h2>Chavara Public School, Walwadi, Dhule</h2>
                <h4>Address : <span style="color: black;">Walwadi, Dhule, Maharashtra, India</span></h4>
                <h4>Board : <span style="color: black;">HSC Board</span></h4>
                <div class="course">                            
                    <h4>Courses</h4>                            
                    <i class="fa fa-plus" id="course-icon"></i>
                    <div class="courses">
                        <p class="item">Computer science</p>
                    </div>
                </div>
                <div class="about">
                    <h4>About</h4>                              
                    <i class="fa fa-plus" id="about-icon"></i>
                    <div class="abt">
                        <p class="about-item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus unde id esse velit facilis cumque culpa, ex aliquid facere alias magnam harum quasi, porro fugiat, nulla quibusdam at repellendus reiciendis.</p>
                    </div>
                </div>
                <div class="course">
                    <h4>Courses : </h4>
                    <ul>
                        <li>B.Voc</li>
                        <li>Computer Science</li>
                    </ul>
                </div>
                <div class="about">
                    <h4>About : </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nisi fugiat suscipit, culpa excepturi delectus consequatur facilis mollitia qui corrupti dolorum facere! Assumenda cupiditate id sint consequatur quo ad esse.</p>
                </div>
            </div>
        </div> -->
        <?php while($row = pg_fetch_row($res)){ ?>
        <div class="school">
            <div class="sch-img">
                <img src="<?php echo '../Admin/School/school_img/'.$row[6]; ?>" class="image">
            </div>
            <div class="content">
                <h2><?php echo $row[1]; ?></h2>
                <h4>Address : <span style="color: black;"><?php echo $row[4];?></span></h4>
                <h4>Board : <span style="color: black;"><?php echo $row[2]; ?></span></h4>
                <div class="course">
                    <h4>Courses : </h4>
                    <ul>
                        <li><?php echo $row[3]; ?></li>
                    </ul>
                </div>
                <div class="about">
                    <h4>About : </h4>
                    <p><?php echo $row[5]; ?></p>
                </div>
            </div>
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
    <script src="../E-Village/index.js"></script>

</body>

</html>