<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <!-- <link rel="stylesheet" href="./population.css"> -->

    <?php

    $db = pg_connect("dbname=evillage user=postgres password=redhat") or die("Cannot connect");
    $sql = "select * from population";
    $res = pg_query($db, $sql);

    if ($res > 0) {
        echo pg_last_error($db);
    }

    session_start();
    ?>

    <style>
        /*INDEX.CSS */

        @import url("https://fonts.googleapis.com/css?family=Kanit");
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap');

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
            /* font-family: Lora; */
            /* background-color:#D3F8E1; */
            background-color: #f0f5f0;
            font-family: Lora;
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
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

        .arrow {
            color: white;
            position: absolute;
            cursor: pointer;
            margin-top: 300px;
            background-color: rgba(19, 18, 18, 0.501);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: bold;
            transition: 0.6s ease;
        }

        .arrow:hover {
            color: white;
            cursor: pointer;
            background-color: seagreen;
        }


        .caption {
            text-align: center;
            font-size: 35px;
        }

        .caption p {
            text-align: center;
            font-size: 15px;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }


        /* Slider */
        .slider {
            position: relative;
            width: 100%;
            margin: auto;
            overflow: hidden;
        }

        .slider img {
            width: 100%;
            display: none;
        }

        img.displaySlide {
            display: block;
            animation-name: fade;
            animation-duration: 0.5s;
        }

        .slider button {
            position: absolute;
            top: -6%;
            transition: 0.7s ease;
            padding: 12px 17px;
            background-color: hsla(0, 0%, 0%, 0.3);
            color: white;
            border: none;
            cursor: pointer;
        }

        @keyframes fade {
            from {
                opacity: .1
            }

            to {
                opacity: 1
            }
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


        /* */
        #info {
            margin: 20px;
        }

        #info h1 {
            color: seagreen;
            display: flex;
            justify-content: center;
            font-size: 35px;
        }

        .main-skills {
            display: flex;
            margin-top: 20px;
            justify-content: center;
            justify-content: space-evenly;
            margin-top: 70px;
        }

        .main-skills .card {
            width: 20%;
            font-family: Lora;
            height: 150px;
            text-align: center;
            /* border: 1px solid seagreen; */
            background-color: #D3F8E1;
            border-radius: 10px;
            padding: 0px;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s ease-in-out;
        }

        .main-skills .card:hover {
            scale: 1.02;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .main-skills .card h2 {
            margin-top: 30px;
            margin-bottom: 10px;
            text-transform: capitalize;
        }

        .main-skills .card h1 {
            margin-top: 20px;
        }

        .main-skills .card p {
            font-size: 12px;
        }

        hr {
            margin-top: 50px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            border: 1px solid seagreen;
        }

        /* About  */
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

        
        #village{
            margin-top: 30px;
            color: seagreen;
            text-align: center;
        }
        #abt-village{
            text-align: center;
            /* /* margin-top: 30px; */
            margin: 40px;
            margin-left: 150px;
            margin-right: 150px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div>
        <img src="../Images/EvillageBanner.jpg" class="img">
    </div>
    <div class="menu-bar">
        <ul>
            <li><a href="#" style="color: seagreen;">Home</a>
                <!-- <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Festivals</a></li>
                        <li><a href="#">Meetings</a></li>
                        <li><a href="#">Gatherings</a></li>
                    </ul>
                </div> -->
            </li>
            <li><a href="#info">Info</a>
                <!-- <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Population</a></li>
                        <li><a href="#">Demographs</a></li>
                        <li><a href="#">Index</a></li>
                    </ul>
                </div> -->
            </li>
            <li><a href="../School/school.php">Schools</a>
                <!-- <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Facilities</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">More Info</a></li>
                    </ul>
                </div> -->
            </li>
            <li><a href="../Hospital/hospital.php">Hospitals</a>
            </li>
            <li><a href="../Gallery/gallery.php">Gallery</a>
            </li>
            <li><a href="../Scheme/scheme.php">Scheme</a>
                <!-- <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Type</a></li>
                        <li><a href="#">Funds</a></li>
                    </ul>
                </div> -->
            </li>
            <li><a href="../Events/events.php">Event</a>
                <div class="sub-menu-1">
                    <!-- <ul>
                        <li><a href="#">Meetings</a></li>
                        <li><a href="#">Sabha</a></li>
                        <li><a href="#">Festivals</a></li>
                    </ul> -->
                </div>
            </li>
            <li><a href="../Notice/notice.php">Notice</a>
                <!-- <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div> -->
            </li>
            <li>
                <a href="#about">About Us</a>
            </li>
            <li>
                <?php

                if (!isset($_SESSION['Login'])) { ?>
                    <a href="#">Login</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="../Login/Login.html">Admin</a></li>
                            <!-- <li><a href="../Login/Login.html">User</a></li> -->
                        </ul>
                    </div>
                <?php } else { ?>
                    <a href="../Login/Login.html">Logout</a>
                    <!-- <div class="sub-menu-1">
                        <ul>
                            <li><a href="../Login/Login.html">Admin</a></li>
                            <li><a href="../Login/Login.html">User</a></li>
                        </ul>
                    </div> -->
                <?php
                    session_destroy();
                }
                ?>
            </li>
            <!-- <li><a href="#">Register</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="../Register/Register_admin.html">Admin</a></li>
                        <li><a href="../Register/Register_user.html">User</a></li>
                    </ul>
                </div>
            </li> -->
        </ul>
    </div>

    <div class="slider">
        <div class="slides">
            <img class="slide" src="../Images/new img1.jpg" alt="Image #1">
            <img class="slide" src="../Images/new img3.jpg" alt="Image #2">
            <img class="slide" src="../Images/village_house.jpg" alt="Image #3">
            <img class="slide" src="../Images/land.jpg" alt="Image #1">
            <img class="slide" src="../Images/img5.webp" alt="Image #2">
        </div>
        <button class="prev arrow" onclick="prevSlide()">&#10094</button>
        <button class="next arrow" onclick="nextSlide()">&#10095</button>
    </div>

    <h1 id="village">Village Korchi, Gadchiroli, Maharashtra</h1>
    <p id="abt-village">Korchi is a Town in Korchi Taluka in Gadchiroli District of Maharashtra State, India. It belongs to Vidarbh region . It belongs to Nagpur Division . It is located 89 KM towards North from District head quarters Gadchiroli.It is a Taluka head quarter.</p>

    <hr>

    <section id="info">
        <?php

        while ($row = pg_fetch_row($res)) {

        ?>
            <h1>Population</h1>
            <div class="main-skills">
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Total Population</h2>
                    <h1><?php echo $row[0] ?></h1>
                </div>
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Total Houses</h2>
                    <h1><?php echo $row[1] ?></h1>
                </div>
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Female Popultion</h2>
                    <h1><?php echo $row[2] ?></h1>
                </div>
            </div>
            <div class="main-skills">
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Total Literacy rate %</h2>
                    <h1><?php echo $row[3] ?></h1>
                </div>
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Female Literacy rate</h2>
                    <h1><?php echo $row[4] ?></h1>
                </div>
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Working Population %</h2>
                    <h1><?php echo $row[5] ?></h1>
                </div>
            </div>
            <div class="main-skills">
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Child Population 2011</h2>
                    <h1><?php echo $row[6] ?></h1>
                </div>
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Scheduled Tribes %</h2>
                    <h1><?php echo $row[7] ?></h1>
                </div>
                <div class="card">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Scheduled Caste %</h2>
                    <h1><?php echo $row[8] ?></h1>
                </div>
            </div>
        <?php } ?>
    </section>
    <hr>
    <br>
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