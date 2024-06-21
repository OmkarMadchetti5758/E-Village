<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

    <title> Events </title>

    <?php
    
    include('../Admin/database.php');
    $sql = "select * from event";
    $res = pg_query($conn,$sql);
    if($res>0)
    {
        echo pg_last_error();
    }

    
    ?>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        * {
            margin: 0;
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

        img {
            width: 100%;
            margin-bottom: -4px;
            transition: ease-in 2s;
        }

        body {
            background: #f0f5f0;
            font-family: Lora;
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
            margin-top: 20px;
            text-align: center;
            /* font-size: 35px; */
            color: seagreen;
        }

        .c2 {
            margin: 50px;
            width: 850px;
            height: 450px;
        }

        .c2 .b2 {
            margin: 50px;
            /* margin-bottom: 200px; */
            padding: 20px;
            margin-left: 100px;
            width: 990px;
            height: 200px;
            background: #D3F8E1;
            border: 1px solid seagreen;
            /* box-shadow:5px 5px 10px #6d6d6d; */
            border-radius: 10px;
            /* transition: ease-in-out 0.5s; */
        }

        .c2 .b2 img {
            width: 120px;
            height: 120px;
            /* margin-bottom: -10px; */
            margin-top: 20px;
        }

        .b2 h2 {
            color: black;
            text-align: center;
            font-size: 23px;
            margin-top: -125px;
            transition: ease 1s;
        }

        .b2 p {
            color: black;
            text-align: center;
            margin-top: 30px;
            transition: ease 1.5s;
        }

        .b2 h3 {
            text-align: center;
            margin-top: 20px;
            transition: ease 2s;
        }

        .b2 h4 {
            text-align: center;
            margin-top: 25px;
        }

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
            background-color: lightgray;
            color: black;
        }

        .top:hover{
            background-color: seagreen;
            color: white;
            cursor: pointer;
        }

        #about {
            display: grid;
            grid-template-columns: 10fr 1fr 10fr;
            background-color: black;
            margin-top: 150px;
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
            <li><a href="../Events/events.php" style="color: seagreen;">Event</a>
            </li>
            <li><a href="../Notice/notice.php">Notice</a></li>
            <li>
                <a href="../Home/home.php#about">About Us</a>
            </li>
            <li>
                <?php
                if (!isset($_SESSION['Login'])) { ?>
                    <a href="#">Login</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="../Login/Login.html">Admin</a></li>
                            <li><a href="../Login/Login.html">User</a></li>
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

    <h1> Events </h1>

    <div class="c2">
        <?php
        while($row = pg_fetch_row($res))
        {
        ?>
        <div class="b2">
            <img src="/E-Village/Images/c1-removebg-preview.png">
            <h2>Name : <?php echo $row[1]; ?></h2>
            <p> Subject : <?php echo $row[2]; ?></p>
            <h3> Venue : <?php echo $row[3]; ?> </h3>
            <h4> Time : <?php echo $row[4]; ?> </h4>
        </div>
        <?php } ?>
        <!-- <div class="b2">
            <img src="/E-Village/Images/c1-removebg-preview.png">
            <h2> Upcoming Festivals </h2>
            <p> This meeting is arranged to discuss about upcoming festivals </p>
            <h3> Time : 10:00 am - 12:00 pm </h3>
            <h4> Venue : Under The Tree </h4>
        </div>

        <div class="b2">
            <img src="/E-Village/Images/c1-removebg-preview.png">
            <h2> Project Evaluation </h2>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
            <h3> Time : 10:00 am - 12:00 pm </h3>
            <h4> Venue : Under The Tree </h4>
        </div> -->
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