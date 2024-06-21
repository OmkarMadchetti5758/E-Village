<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheme</title>
    <link rel="stylesheet" href="index.css">
    <!-- JQuery lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

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

        /*Top */
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
            background-color: #D3F8E1;
            color: black;
        }

        .top:hover {
            background-color: seagreen;
            color: black;
            cursor: pointer;
        }

        /*About */
        #about-section {
            background-color: black;
            position: relative;
            height: 400px;
        }

        #about-section h2 {
            padding-top: 30px;
            text-align: center;
            color: seagreen;

        }

        #about-section p {
            margin-top: 30px;
            text-align: center;
            justify-content: baseline;
            color: rgba(255, 255, 255, 0.827);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 100;
        }

        #about-section .contact-us {
            margin-top: 20px;
            text-align: center;
        }

        #about-section .contact-us a {
            text-decoration: none;
            color: white;
        }

        #about-section .contact-us a:hover {
            color: seagreen;
        }

        /* Scheme */
        h2 {
            font-size: 20px;
            margin-top: 50px;
            text-align: center;
            color: seagreen;
        }

        .box {
            display: grid;
            justify-content: center;
            margin: 65px;
            margin-top: 50px;
            border: 2px solid seagreen;
            width: 90%;
            padding-bottom: 25px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            /* box-shadow: 5px 5px 10px; */
            transition: ease-in-out 0.3s;
        }

        .box:hover {
            scale: 1.002;
            /* background-color: rgb(37, 124, 74); */
            box-shadow: 5px 5px 10px rgb(18, 17, 17);
        }

        .box h3 {
            padding: 15px;
            text-align: center;
        }

        .sub-category {
            display: grid;
            grid-template-columns: 90fr 3fr;
            margin: 4px;
            padding: 8px;
            border: 1px solid seagreen;
            border-radius: 5px;
            width: 1150px;
            background-color: #D3F8E1;
        }

        .sub-category h4 {
            padding: 4px;
            margin-left: 20px;
            color: seagreen;
        }

        .sub-category h2 {
            margin-right: 20px;
            font-weight: bold;
        }

        .sub-category h2:hover {
            cursor: pointer;
            color: seagreen;
        }

        hr {
            margin-top: 6px;
            margin-left: -7px;
            width: 104.4%;
            border-top: 1px solid black;
        }

        .info {
            margin-left: -8px;
            width: 104.75%;
            background-color: #e1d7d7;
        }

        .details,
        .benefits,
        .eligiblity,
        .exclusion,
        .document,
        .application p {
            color: black;
            margin-top: 20px;
            margin-bottom: 15px;
            margin-left: 30px;
            text-align: left;
        }

        .benefits ol li {
            margin-top: 10px;
            margin-left: 20px;
        }

        .document ol li {
            margin-top: 10px;
            margin-left: 50px;
        }

        .application ol li {
            margin-top: 10px;
            margin-left: 50px;
        }

        .eligiblity ol li {
            margin-top: 10px;
            margin-left: 20px;
        }

        #details-icon,
        #benefits-icon,
        #eligiblity-icon,
        #exclusion-icon,
        #document-icon,
        #application-icon {
            margin-top: 8px;
            font-size: 14px;
        }

        #details-icon:hover,
        #benefits-icon:hover,
        #eligiblity-icon:hover,
        #exclusion-icon:hover,
        #document-icon:hover,
        #application-icon:hover {
            cursor: pointer;
            color: seagreen;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".details").hide();
            $(".benefits").hide();
            $(".eligiblity").hide();
            $(".exclusion").hide();
            $(".document").hide();
            $(".application").hide();

            $("#details-icon").click(function() {
                $(this).toggleClass("fa fa-plus fa fa-minus");
                $(".details").toggle();
            });

            $("#benefits-icon").click(function() {
                $(this).toggleClass("fa fa-plus fa fa-minus");
                $(".benefits").toggle();
            });

            $("#eligiblity-icon").click(function() {
                $(this).toggleClass("fa fa-plus fa fa-minus");
                $(".eligiblity").toggle();
            });

            $("#exclusion-icon").click(function() {
                $(this).toggleClass("fa fa-plus fa fa-minus");
                $(".exclusion").toggle();
            });

            $("#document-icon").click(function() {
                $(this).toggleClass("fa fa-plus fa fa-minus");
                $(".document").toggle();
            });

            $("#application-icon").click(function() {
                $(this).toggleClass("fa fa-plus fa fa-minus");
                $(".application").toggle();
            });
        });
    </script>
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
            <li><a href="#">Schools</a>
            </li>
            <li><a href="../Hospital/hospital.php">Hospitals</a>
            </li>
            <li><a href="../Gallery/gallery.php">Gallery</a>
            </li>
            <li><a href="../Scheme/scheme.php" style="color: seagreen;">Scheme</a>
            </li>
            <li><a href="../Events/events.php">Event</a>
            </li>
            <li><a href="../Notice/notice.php">Notice</a>
            </li>
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
        </ul>
    </div>

    <!-- Details , Benefits , Eligiblity , exclusions , Documents -->
    <h2>Chief Minister Sustainable Agriculture Irrigation Scheme</h2>
    <div class="box">
        <h3></h3>
        <div class="sub-category">
            <h4>Details</h4>
            <!-- <h2 id="details-icon">&plus;</h2> -->
            <i class="fa fa-plus" id="details-icon"></i>
            <div class="details">
                <p id="info">
                    Chief Minister Sustainable Agriculture Irrigation Scheme-Magel Tyala Shettale (Individual Farm Pond) has been launched by Ministry of Agriculture, Animal Husbandry,Dairy Development &Fishries Department, Maharashtra State in the year 2022-23 (vide G.R.Dated 29 th June, 2022)
                    Under this scheme subsidy payable to individual farmer is minimum Rs.14433/- and maximum Rs.75000/- depending on the size of the farm pond. <br><br>
                    Out of total area, 82 percent area of agriculture land in the state is rainfed and is dependent on rainfall. Water stress due to uneven distribution of rains and periodic interruptions in rains leads to large reduction in crop production. Sometimes crops are also destroyed. Farm ponds, in such situation plays an important role in providing protective irrigation and reduces crop losses substantially. Considering this matter, Chief Minister Sustainable Agriculture Irrigation Scheme-Individual Farm Pond has been sanctioned by the Maharashtra State Govt. vide G.R. Dated 29th June,2022. <br><br>
                    The scheme is implemented in all districts of the state. Under this scheme the subsidy payable to individual farmer is minimum Rs 14433/- and maximum Rs 75000/- depending on the size of the farm pond. Farmers should hold at least 0.20 ha land in Kokan region, while it is 0.40 ha limit for rest of the Maharashtra. Online applications are invited from farmers under Maha-DBT portal. The scheme is implemented by selecting the beneficiaries online through Maha-DBT portal. <br><br>
                    After completion of the farm pond, the subsidy payable under the scheme is credited through the PFMS system to theAadhaar number linked bank account of the farmer.The farm ponds are of two types one being with inlet outlet and the other without inlet and outlet type. <br><br>
                    The implementation of the component "Magel TyalaShettale" under Chief Minister Sustainable Agriculture Irrigation Scheme was approved videGovernment Circular dated April 25,2023. <br><br>
                    The name <span style="font-weight: bold;color:orangered;">“Chhatrapati Shivaji Maharaj Krishi Yojana"</span> was given vide GR. dated 18th October 2023.
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Benefits</h4>
            <i class="fa fa-plus" id="benefits-icon"></i>
            <div class="benefits">
                <p id="info">
                <ol>
                    <li>Financial Assistance is given to farmers.</li>
                    <li>The subsidy payable to an individual farmer minimum Rs.14433/- and maximum Rs.75000/- depending on the size of the farmpond.</li>
                </ol>
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Eligiblity</h4>
            <i class="fa fa-plus" id="eligiblity-icon"></i>
            <div class="eligiblity">
                <p>
                <ol>
                    <li>Farmer should hold at least (Minimum) 0.20 ha. land and Kokan region, while it is 0.40 ha. limit for rest of Maharashtra.</li>
                    <li>The applicant farmers land will have to be technically suitable for digging farm pond. So that the runoff rainwater can be stored in the farm pond through natural flow and recharge will be possible. In case of farm ponds without inlet and outlet there should be a natural source from where extra runoff during rainy season can be lifted and stored in farm pond.</li>
                    <li>Before applying for farm pond, the applicant farmers should not have availed the subsidy for farm pond, community tank or bodi in paddy bunding or any Government Scheme.</li>
                </ol>
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Exclusions</h4>
            <i class="fa fa-plus" id="exclusion-icon"></i>
            <div class="exclusion">
                <p>Institutional beneficiaries cannot avail the benefit.</p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Application Processs</h4>
            <i class="fa fa-plus" id="application-icon"></i>
            <div class="application">
                <p><span style="color: seagreen; font-weight: bold;">Online Process</span></p>
                <ol>
                    <li>Link : <a href="https://mahadbt.maharashtra.gov.in/" target="_blank">https://mahadbt.maharashtra.gov.in/</a>.</li>
                    <li>Farmer Registration</li>
                    <li>Select user type and complete Aadhar authentication.</li>
                    <li>Profile completion (Mobile number, Address details, Land & land holding information)</li>
                    <li>Apply for Individual Farm Pond (a) select scheme Chief Minister Sustainable Agriculture Irrigation Scheme (b) Select farm pond type (with inlet outlet or without inlet outlet) (c) Select farm pond size. </li>
                </ol>
            </div>
        </div>
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
    </section>
    <script src="../index.js"></script>
</body>

</html>