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
        .eligiblity ol li{
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
    <h2>Chief Minister Agriculture and Food Processing Scheme</h2>
    <div class="box">
        <h3></h3>
        <div class="sub-category">
            <h4>Details</h4>
            <!-- <h2 id="details-icon">&plus;</h2> -->
            <i class="fa fa-plus" id="details-icon"></i>
            <div class="details">
                <p id="info">
                    Chief Minister Agriculture and Food Processing Scheme is being implemented in the state since 2017-18 which  has been extended for the next 
                    five years till the year 2026-27 as per the government resolution dated 17 May 2022.  The main objectives of the scheme are to encourage model 
                    technology based projects and quality enhancement of agriculture produce, to encourage exports, to create skill manpower for agro and food 
                    processing and employment generation through small and medium agro and food processing units in rural areas.
                </p>
            </div>
        </div>
        <div class="sub-category">
            <h4>Benefits</h4>
            <i class="fa fa-plus" id="benefits-icon"></i>
            <div class="benefits">
                <p id="info">
                Elements of the Scheme - Under this scheme, three components are included as follows.
                    <ol>
                        <li>Establishment of agriculture and food processing units, their upgradation and modernization.</li>
                        <li>The cold chain. To establish food processing projects related to pre-processing centre and integrated cold chain. </li>
                        <li>Financial Assistance:
                            <ol type="i">
                                <li>30% subsidy for construction of factories and machines of Processing Unit (Civil work for housing processing unit) and maximum limit of Rs.50.00 lakhs.</li>
                                <li>Subsidy will be given on the basis of “Credit Linked Back ended subsidy”  in two similar instalments,  a) After completion of the project and b) After full commercial production.</li>
                                <li>Loan amount should one and half times more than subsidy.</li>
                            </ol>
                        </li>
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
                        <li>The beneficiary should have age above 18 years</li>
                        <li>The beneficiary should have Aadhaar Card/ Pan Card .</li>
                        <li>The beneficiary should have Good Bank CIBIL  Score</li>
                        <li>The beneficiary have 7/12 certificate and 8 –A certificate or Lease documents</li>
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
                <p><span style="color: seagreen; font-weight: bold;">Offline Process</span></p>
                <ol>
                    <li>Applicant (Entrepreneur)</li>
                    <li>Proposal submitted with bank loan approval to District Superintendent Agriculture Officer</li>
                    <li>Pre-project feasibility study through the Deputy Director of Agriculture, District Superintendent Agriculture Office/Sub-divisional 
                        agricultural Officer and with the recommendation of the District Project Implementation Committee
                    </li>
                    <li>Major Document Verification for Grant Payment- CA Certificate, Original Bank Loan Sanction, Original Bank Appraisal, CE -Civil & Mechanical, 
                        Bank Reserve fund Acc. Details, recommendation of District level Project Implementation Committee and strategic inspection report etc.
                    </li>
                    <li>In-principle approval of eligible projects in Commissionerate level Project Approval Committee meeting</li>
                    <li>As per the recommendation of the District level Project Implementation Committee, after the completion of the project construction, 
                        the first phase and the second phase, when the project is in full production capacity, the subsidy will be deposited in the reserve fund 
                        account of the bank.
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
                        <li>Beneficiary Application (Annexure II)</li>
                        <li>Bank Loan Sanction Letter (Original)</li>
                        <li>Bank Appraisal (Original)</li>
                        <li>7/12, 8A (Original) or Agreement</li>
                        <li>PAN card of individual/business, Aadhaar card</li>
                        <li>Enterprise Registration Certificate (Udyam Registration)</li>
                        <li>Detailed Project Report (DPR) of the project (Original)</li>
                        <li>A flow chart of the project's process output</li>
                        <li>Notarized Agreement to be submitted for Project Construction (Annexure-III)</li>
                        <li>Construction Blue Print (Bank Attested)</li>
                        <li>Construction Budget (Bank Attested)</li>
                        <li>Machinery Quotation (Bank Attested)</li>
                        <li>Pre-project feasibility study report (Annexure-V)</li>
                        <li>Recommendation Letter of District Level Project Implementation Committee (Annexure- VI)</li>
                        <li>Audit reports for last three years (Only for Upgradation, Expansion and Modernization Projects)</li>
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