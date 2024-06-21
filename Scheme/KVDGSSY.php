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
        .box:hover{
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
        .benefits ol li{
            margin-top: 10px;
            margin-left: 20px;
        }
        .document ol li{
            margin-top: 10px;
            margin-left: 20px;
        }
        .application ol li{
            margin-top: 10px;
            margin-left: 50px;
        }
        .eligiblity ol li{
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
    <h2>Karma Veer Dadasaheb Gaikwad Sabalikaran & Swabhiman Yojana</h2>
    <div class="box">
        <h3></h3>
        <div class="sub-category">
            <h4>Details</h4>
            <!-- <h2 id="details-icon">&plus;</h2> -->
            <i class="fa fa-plus" id="details-icon"></i>
            <div class="details">
                <p id="info">
                Being implemented particularly for the Scheduled Caste Communities, the "Karma Veer Dadasaheb Gaikwad Sabalikaran & Swabhiman Yojana" is a scheme by the Department of Social Justice & Special Assistance, Govt. of Maharashtra. The main objective of this scheme is to improve the financial condition of the scheduled castes and Nav-Buddhists who are landless workers and are from "Below Poverty Line". Only citizens who are permanent residents of the state of Maharashtra are eligible to apply for this scheme. This scheme is 100% funded by the Govt. of Maharashtra.
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Benefits</h4>
            <i class="fa fa-plus" id="benefits-icon"></i>
            <div class="benefits">
                <p id="info">
                The beneficiary is provided with 2-acre irrigated land or 4-acre non-irrigated land on 50% of the subsidy and 50% is loan.
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Eligiblity</h4>
            <i class="fa fa-plus" id="eligiblity-icon"></i>
            <div class="eligiblity">
                <p>
                    <ol>
                        <li>The applicant should be a citizen of India.</li>
                        <li>The applicant should be a permanent resident of Maharashtra State.</li>
                        <li>The applicant should be in the 18 to 60 years age group.</li>
                        <li>The applicant should be from Scheduled Caste or should be a Nav-Buddhists.</li>
                        <li>The applicant should be landless.</li>
                        <li>The applicant should be from the "Below Poverty Line" category.</li>
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
                <p><span style="color: seagreen; font-weight: bold;">Offline Process</span></p>
                <ol>
                    <li>Visit the <a href="https://sjsa.maharashtra.gov.in/en/contacts">District Social Welfare Office</a>, and request a hard copy of the format of the application form for the scheme from the concerned authority.</li>
                    <li>In the application form, fill in all the mandatory fields, paste the passport-sized photograph (signed across), and attach all the (self-attested) mandatory documents.</li>
                    <li>Submit the duly filled and signed application form along with the documents to the Assistant Commissioner, District Social Welfare Office.</li>
                    <li>Acquire the receipt/acknowledgment of the successful submission of the application form from the District Social Welfare Office.</li>
                </ol>
            </div>
        </div>
        <div class="sub-category">
            <h4>Documents</h4>
            <i class="fa fa-plus" id="document-icon"></i>
            <div class="document">
                <p>
                    <ol>
                        <li>BPL Card</li>
                        <li>Aadhaar Card.</li>
                        <li>Proof of Age (Birth Certificate, Marksheet of Class 10th/12th, etc)</li>
                        <li>2-Passport Sized Photograph (Signed Across)</li>
                        <li>Residential Certificate / Domicile Certificate of the State of Maharashtra.</li>
                        <li>Caste Certificate and/or Certificate mentioning "Nau Bouddha" or "Converted Buddhist" or "Neo Buddhist" issued by the Revenue Department, Govt. of Maharashtra.</li>
                        <li>Details of the Bank Account (Bank Name, Branch Name, Address, IFSC, etc).</li>
                        <li>Any other document required by the District Social Welfare Office.</li>
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