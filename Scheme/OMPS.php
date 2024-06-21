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
        h2{
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
            width: 1150px;
            background-color: #D3F8E1;
            border-radius: 5px;
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

        .eligiblity ol li{
            margin-top: 10px;
            margin-left: 20px;
        }

        .document ol li {
            margin-top: 10px;
            margin-left: 20px;
        }

        .application ol li {
            margin-top: 10px;
            margin-left: 50px;
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
    <h2>Opening And Maintenance Of Public School (Vidya Niketan) For Vimukta Jatis And Nomadic Tribes</h2>
    <div class="box">
        <h3></h3>
        <div class="sub-category">
            <h4>Details</h4>
            <!-- <h2 id="details-icon">&plus;</h2> -->
            <i class="fa fa-plus" id="details-icon"></i>
            <div class="details">
                <p id="info">
                    The Government of Maharashtra has introduced a scheme "Opening And Maintenance Of Public School (Vidya Niketan) For Vimukta Jatis And 
                    Nomadic Tribes" to the voluntary organization to run the Public School (Vidya Niketan) on a grant-in-aid basis at Kamlewadi, Taluka Mukhed, 
                    District Nanded for the needy, brilliant and talented students belonging to VJNT Category. In this public school, students get an education 
                    from 5th to 12th standard on a merit basis.The Benefits provided by the Government of Maharashtra are Financial Assistance given to the 
                    institution for maintenance assistance given on building rent. 100 percent salary grants for approved teaching and non-teaching staff. 
                    Students are provided with facilities like books, notebooks, uniforms, education stationary free lodging, and boarding facilities. 
                    Rs.1450/- p.m. per residential student is admissible.
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Benefits</h4>
            <i class="fa fa-plus" id="benefits-icon"></i>
            <div class="benefits">
                <p id="info">
                    <!-- Subsidy through DBT is given to farmer for plantation of 16 perennial fruit crops like Mango, Cashew, Guava, Sapota, Custered Apple, Pomegranate, Paper Lemon, Coconut, Tamarind, Fig, Amla, Kokum, Jackfruit, Jamun, Orange, Mosambi, for below mentioned activities : <br> -->
                <ol>
                    <li>Financial Assistance is given to the institution for maintenance assistance is given on building rent.</li>
                    <li>100 percent salary grants for approved teaching and non-teaching staff.</li>
                    <li>Students are provided with facilities like books, notebooks, uniforms, education stationary free lodging, and boarding facilities. </li>
                    <li>₹1450/- p.m. per residential student is admissible.</li>
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
                        <li>The beneficiary should be a student.</li>
                        <li>The beneficiary should be a resident of Maharashtra.</li>
                        <li>The beneficiary should belong to the VJNT community.</li>
                        <li>The income of the parents should not be more than Rs. 24000/- per annum.</li>
                        <li>The beneficiary should clear the competitive examination Students belonging to the VJNT category & those who studying in 4th 
                            Standard are eligible to take admitted to VJNT Ashram School on a merit basis
                        </li>
                    </ol>
                </p>
            </div>
        </div>
        <!-- <div class="sub-category">
            <h4>Exclusions</h4>
            <i class="fa fa-plus" id="exclusion-icon"></i>
            <div class="exclusion">
                <p>Institutional beneficiaries cannot avail the benefit.</p>
            </div>
        </div> -->
        <div class="sub-category">
            <h4>Application Processs</h4>
            <i class="fa fa-plus" id="application-icon"></i>
            <div class="application">
                <p><span style="color: seagreen; font-weight: bold;">Online Process</span></p>
                <ol>
                    <li>Visit the <a href="https://mahadbt.maharashtra.gov.in/" target="_blank">https://mahadbt.maharashtra.gov.in/</a> of Aaple Sarkar / Maha DBT..</li>
                    <li> Click on "New Applicant Registration". Register using your Name, Mobile Number, and Email ID. Create a Username and Password. 
                        Your Mobile Number and Email ID will be verified via OTP.
                    </li>
                    <li>Now visit Login Page and log in using your Username and Password.You will be directed to Login Page. In the left pane, 
                        click "Aadhaar Bank Link" to link your Aadhaar with your Bank Account.
                    </li>
                    <li>In the left pane, click "Profile". Fill in all the mandatory details and upload the mandatory documents (Personal Details, 
                        Address Information, Other Information, Current Course, Past Qualification, and Hostel Details). Click "Save".
                    </li>
                    <li> In the left pane, click "All Schemes". A list of schemes will appear. Click on "Savitribai Phule Scholarship".</li>
                    <li>Fill in all the additional information and upload the mandatory documents. Click "Submit" to submit your application. 
                        A pop-up will appear, displaying your Application ID. Save the Application ID for future reference. Click "OK".
                    </li>
                </ol>
            </div>
        </div>
        <div class="sub-category">
            <h4>Documents</h4>
            <i class="fa fa-plus" id="document-icon"></i>
            <div class="document">
                <p>
                    <ol>
                        <li>Aadhaar Card</li>
                        <li>Proof of Identity.</li>
                        <li>Proof of Age (Birth Certificate).</li>
                        <li>Proof of Address.</li>
                        <li>Domicile Certificate of Maharashtra.</li>
                        <li>Caste Certificate VJNT And Nomadic Tribe Community (duly signed by an authorized Revenue Officer, not below the rank of Tehsildar).     </li>
                        <li>Marksheet of the Latest Educational Qualification.</li>
                        <li>Fee Receipt of ‘Current Course Year’.</li>
                        <li>Bank Account Details.</li>
                        <li>Passport-sized Photograph.</li>
                    </ol>
                </p>
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