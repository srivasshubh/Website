<?php 
require("connection.php");
$conn = connection();
$query2 = "select event_name from event_categories";
$result2 = $conn->query($query2);
$query4 = "select event_name from event_categories";
$result4 = $conn->query($query4);
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            top: 0;
            background-color: #fafafa;
            overflow-x: hidden;
        }

        .header {
            color: #fff;
            top: 0px;
            position: absolute;
            width: 100vw;
            z-index: 3;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 8px 20px;
            box-sizing: border-box;

        }

        .burger {
            display: none;
            width: 100px;
        }

        .menu_items {
            padding: 5px 20px;
            margin: auto;
        }

        .inner_menu {
            /* background:red; */
        }

        .menu_items li {
            list-style-type: none;
            margin-left: 0px;
            margin-top: 0px;
            position: relative;
        }

        .menu_items ul {
            padding-left: 0;
            display: none;
        }

        ul li:hover ul {
            display: block;
        }

        .change_property {
            display: none;
            margin: 10px 0px !important;
            margin-left: -30px !important;
        }

        ul li ul li {
            width: 110px;
        }

        .menu_items:hover ul {
            display: block;
            background-color: darkslateblue;
        }

        .menu_items li {
            background-color: #1791E2;
        }

        .menu_items li a {
            display: block;
        }

        .menu_items li {
            margin-left: 0px;
            margin-top: 0px;
        }

        .hidden_menu {
            overflow: auto;
            transition-duration: 0.5s;
            position: fixed;
            height: 100vh;
            width: 250px;
            background: white;
            z-index: 4;
            top: 0px;
            transform: translate(-100%, 0);
            display: none;
        }

        .hidden_menu ul {
            margin: 200px 30px;
            list-style-type: none;
        }

        .hidden_menu ul li {
            margin: 20px;
        }

        .hidden_menu a {
            text-decoration: none;
            color: darkblue;
            font-family: Cabin;
            font-size: 22px;
        }

        .burger .l {
            margin: 6px 10px;
            width: 50px;
            height: 5px;
            background: white;
            border-radius: 10px;
        }

        .menu_items a {
            font-family: Fira Sans;
            text-decoration: none;
            color: azure;
            display: inline-block;
            padding: 5px;
            font-size: 20px;
            background: rgba(250, 250, 250, 0.1);
            letter-spacing: 2px;
            border: solid 1px transparent;
        }

        .menu_items a:hover {
            border-color: black;
        }

        .top_div {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 12%;
            background-color: darkslateblue;
            border-radius: 8px;
            z-index: 99;
            position: fixed;
            margin-left: 0px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            min-width: 331px;
        }

        .image_holder {
            width: 100px;
            height: 100px;
            top: 80px;
            left: 50px;
            background-image: url(Images/logo.png);
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            position: fixed;
            z-index: 5;
            opacity: 1;
        }

        .main_content {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 10%;
        }

        .big_container {
            width: 100%;
            height: 120%;
            /*            position: relative;*/
            display: block;
            margin-top: 100px;
        }

        .above_text {
            font-family: muli;
            font-size: 35px;
            text-align: center;
            letter-spacing: 3px;
            word-spacing: 5px;
        }

        .rside_container {
            width: 50%;
            height: 100vh;
            float: right;
            /*            position: relative;*/
            display: inline-block;
            background-color: white;
        }

        .contact_us_form {
            box-sizing: border-box;
            padding: 50px;
            text-align: center;
            margin: 50px 0px;
            background: rgba(40, 60, 73, 1.00);
            font-family: karla;
            font-size: 18px;
            margin-top: 40px;
        }

        .contact_us_form span {
            font-family: karla;
            letter-spacing: 2px;
            color: #fff;
            display: inline-block;
        }



        .form {
            width: 600px;
            flex: 1;
            min-width: 410px;
            max-width: 100vw;
            height: 400px;
            margin: auto;
        }

        .form input[type='text'],
        .form input[type='email'],
        textarea {
            background: rgba(84, 105, 146, 0.2);
            height: 35px;
            width: 90%;
            margin: 18px auto;
            border: none;
            padding: 5px 10px;
            color: #fff;
            font-size: 18px;
            box-sizing: border-box;
            max-width: 96vw;
            border-radius: 15px;
        }

        textarea {
            height: auto;
            font-family: karla;
            resize: none;
            font-size: 20px;
        }

        .form input[type='submit'] {
            cursor: pointer;
            background-color: darkslateblue;
            color: #fff;
            border-radius: 15px;
            padding: 6px 35px;
            font-family: Corben;
            font-size: 18px;
            margin-left: 30%;
        }

        .side_container {
            width: 50%;
            height: 100vh;
            /*            position: relative;*/
            display: inline-block;
            background-image: url(Images/image4.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /*            position: absolute;*/
        }

        .place_cont {
            width: 50%;
            height: 50%;
            /*            position: relative;*/
            margin-left: 25%;
            margin-top: 25%;
        }

        .style_text {
            font-family: Lato;
            font-size: 20px;
            color: snow;
            font-weight: bolder;
        }

        .map {
            width: 100vw;
            /*            height: 50vh;*/
            /*            position: relative;*/
            align-items: center;
            /*	background: url(../images/map_capture.png);*/
            background-size: contain;
            margin-top: 70px;
        }

        /*map style*/

        .wrapper {
            min-width: 420px;
            width: 100%;
        }

        .above_text2 {
            font-family: muli;
            font-size: 35px;
            text-align: center;
            /*            position: relative;*/
        }

        .lower_text_div {
            /*            position: relative;*/
            background-color: red;
        }

        .find_us {
            color: red;
            width: 100vw;
            height: 0%;
            font-family: muli;
            font-size: 45px;
            text-align: center;
            letter-spacing: 3px;
            word-spacing: 5px;
            /*            position: relative;*/
        }

        footer {
            display: flex;
            box-sizing: border-box;
            flex-wrap: wrap;
            padding: 10px 5px;
            min-height: 200px;
            background: rgba(41, 48, 54, 1.00);
            justify-content: space-around;
            color: #fff;
            width: 100vw;
        }

        .footer_mmmut {
            font-family: Open Sans;
            display: flex;
            width: 495px;
            align-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 10px;
            max-width: 90%;
        }

        .footer_mmmut_img {
            flex-basis: 100px;
            height: 100px;
            background: url('Images/mmmut_logo.png') no-repeat;
            background-size: contain;
            background-position: center;
        }

        .footer_ces_img {
            flex-basis: 100px;
            height: 100px;
            background-image: url(Images/logo.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            border-radius: 100%;
        }

        .other {
            flex-basis: 45%;
            background: green;
        }

        .contacts {
            flex: 1;
            box-sizing: border-box;
            padding: 10px;
        }

        .footer_name {
            font-size: 17px;
            color: rgba(158, 155, 155, 1.00);
        }

        .footer_email {
            font-size: 15px;
        }

        .footer_phone {
            font-size: 15px;
        }

        .socials {
            width: 100%;
            min-height: 80px;
            display: flex;
        }

        .social_icons {
            height: 35px;
            margin: auto;
            padding: 0px 10px;
            border-bottom: solid 1px #fff;
        }

        .social_icons>* {
            display: inline-block;
            height: 30px;
            width: 30px;

        }

        .social_icons .fb {
            background-image: url(Images/facebook.svg);
            background-size: contain;
            background-position: center;
            top: 30px;
        }

        .social_icons .in {
            background-image: url(Images/linkedin.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0px 10px;
            width: 30px;
            height: 30px;
        }

        .social_icons .twitter {
            background: url(Images/facebook.svg);
            background-size: contain;
            background-position: center;
        }

        @media (max-width: 800px) {
            .side_container {
                display: block;
                width: 100vw;
                /*                position: relative;*/
            }
            .rside_container {
                display: block;
                width: 95vw;
                /*                position: relative;*/
            }
            .map {
                top: 100px;
            }
        }

        @media (max-width: 380px) {
            .side_container {
                display: block;
                width: 100vw;
                /*                position: relative;*/
            }
            .rside_container {
                display: block;
                width: 100vw;
                /*                position: relative;*/
            }
            .map {
                width: 100vw;
                overflow-x: hidden;
                top: 100px;
                /*                height: 250px;*/
            }
        }

        @media (max-width: 990px) {
            .text_holder {
                display: none;
            }
            .top_div .menu_items {
                display: none;
            }
            .resp_text_holder {
                display: block;
            }
            .burger {
                display: inline !important;
                margin-left: calc(100vw - 100px);
            }
            .hidden_menu {
                display: block !important;
            }
            .image_holder {
                transition-duration: 0.5s;
                opacity: 0;
            }
            html {
                width: 100vw;
                overflow-x: hidden;
            }
            footer {
                flex-direction: column;
                align-items: center;
            }
        }

        @keyframes loader {
            0% {
                transform: rotateY(0deg);
            }
            25% {
                transform: rotateY(720deg);
            }
            50% {
                transform: rotateY(720deg);
            }
            75% {
                transform: rotateY(0deg);
            }
            100% {
                transform: rotateY(0deg);
            }
        }

    </style>
</head>

<body onload="onLoadHandler();">
    <div id="loader" style="width:100%; height:100%; display:flex;">
        <div style="width:120px; height:100px; margin:auto; background-image: url('./images/logo.png'); animation: loader; animation-duration: 4s; animation-iteration-count: infinite; background-size: contain; background-position:center; background-repeat: no-repeat;"></div>
    </div>
    <div id="after_load" style="display: none;">
        <div class="hidden_menu">
            <div class="inner_menu">
                <ul>
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="#" onclick="hide();">Events</a>
                        <ul class="change_property">
                            <li><a href="freshers_talk.php">Freshers Talk</a> </li>
                            <?php while($row4 = $result4->fetch_assoc()){ ?>
                            <li>
                                <a href="./start_up.php?event_name=<?php echo($row4['event_name']);  ?>">
                                    <?php echo($row4['event_name']);  ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="articles.php">Interview</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="member.php">Members</a></li>
                    <li><a href="contact_us.php">Contact</a></li>
                </ul>
            </div>
        </div>

        <header class="header">

            <div class="top_div">
                <div class="resp_text_holder" style="position: absolute; left: 10px; top:-4px;">
                </div>
                <div class="menu_items"><a href="index.php">Home</a></div>
                <div class="menu_items" style="margin-top: 14px !important;"><a href="#"> Campus Events</a>
                    <ul>
                        <li><a href="freshers_talk.php">Freshers Talk</a> </li>
                        <?php while($row = $result2->fetch_assoc()){ ?>
                        <li>
                            <a href="./start_up.php?event_name=<?php echo($row['event_name']);  ?>">
                                <?php echo($row['event_name']);  ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="menu_items"><a href="articles.php">Interview</a></div>
                <div class="menu_items"><a href="Gallery.php">Gallery</a></div>
                <div class="menu_items"><a href="member.php">Members</a></div>
                <div class="menu_items"><a href="contact_us.php">Contact Us</a></div>
                <div class="burger menu_items" onclick="showMenu();">
                    <div class="l"></div>
                    <div class="l"></div>
                    <div class="l"></div>
                </div>
            </div>
        </header>
        <div class="image_holder"></div>
        <div class="big_container">
            <h1 class="above_text"> Contact Us </h1>
            <div class="side_container">
                <div class="place_cont">
                    <h3 class="style_text" style="color: darkorange;"> Address: </h3>
                    <h3 class="style_text"> Madan Mohan Malaviya University Of Technology, Deoria Road Gorakhpur, Uttar Pradesh</h3>
                    <h3 class="style_text" style="color: darkorange;"> Phone Number: </h3>
                    <h3 class="style_text"> 0551-2273958</h3>
                    <h3 class="style_text" style="color:darkorange;"> email: </h3>
                    <h3 class="style_text"> ecell@mmmut.ac.in</h3>
                </div>

            </div>
            <div class="rside_container">
                <div class="form">
                    <form id="contact_us_form" action="contact_us_php.php" method="post">
                        <input type="text" placeholder="Name" name="name" required />
                        <br>
                        <input type="email" placeholder="em@il" name="email" required />
                        <br>
                        <input type="text" placeholder="Mobile Number" name="number" required />
                        <br/>
                        <input type="text" placeholder="Subject" name="subject" required />
                        <br/>
                        <textarea form="contact_us_form" name="query" id="" cols="30" rows="10" placeholder="Your questions/Suggestions" required></textarea>
                        <br>
                        <input type="submit" name="submit" value="Submit" />
                    </form>
                </div>
            </div>

        </div>
        <div class="find_us"> Find Us Here
        </div>
        <div class="map">
            <div class="wrapper">
                <div class="container">
                    <iframe style="width:98vw" height="300px" src="https://maps.google.com/maps?q=Madan Mohan Malaviya University of Technology&t=&z=13&ie=UTF8&iwloc=&output=embed " frameborder="0 " scrolling="no " marginheight="0 " marginwidth="0 "></iframe></div>
            </div>
            <footer>
                <div class="footer_mmmut ">
                    <div class="footer_mmmut_img "></div>
                    <div class="contacts ">
                        <div class="footer_name ">MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY<br> GORAKHPUR
                        </div>
                        <div class="footer_email "><a href="http://mmmut.ac.in/ " target="_blank " style="color:white; ">http://mmmut.ac.in </a></div>
                        <div class="footer_phone ">+91-551-2273958, +91-8765783730</div>
                    </div>
                </div>
                <div class="footer_mmmut ">
                    <div class="footer_ces_img "></div>
                    <div class="contacts ">
                        <div class="footer_name " style="font-size: 20px; "> The Entrepreneurship and Development Cell, MMMUT </div>
                        <div class="footer_email "> ecell.mmmut@gmail.com</div>
                        <div class="footer_phone ">+918052192071</div>
                    </div>
                </div>
                <div class="socials ">
                    <div class="social_icons ">
                        <div class="fb " style="cursor: pointer; " onClick="window.open( 'https://www.facebook.com/ecell.mmmut/?hc_ref=ARQfUDnx6hEP3F1w3Qr8t26mIXtIbZ3wPb0drb94FmW_k7CJZ5JzYxx6bCXhf0SH5bA&fref=nf', '_blank') "></div>
                        <div class="in " style="cursor: pointer; " onClick="window.open( 'https://www.linkedin.com/school/15142666/', '_blank') "></div>
                    </div>
                </div>
                <div class="developers " style="font-family: Open Sans; font-size: 18px; ">Designed by <a href="https://www.facebook.com/ProminentDevelopers/ " style="color: aquamarine; " target="_blank ">Prominent Developers</a></div>
            </footer>
        </div>
    </div>

</body>
<script>
    var hidden_menu_visible = 0;

    function showMenu() {
        var HMenu = document.querySelector(".hidden_menu");
        var logo = document.querySelector('.image_holder');
        if (hidden_menu_visible == 0) {
            HMenu.style.transform = "translate( 0%, 0% )";
            logo.style.opacity = "1";
            hidden_menu_visible = 1;
        } else {
            hidden_menu_visible = 0;
            HMenu.style.transform = "translate( -100%, 0% )";
            logo.style.opacity = "0";
        }

    }

    function onLoadHandler() {
        var icon = document.getElementById("loader");
        icon.parentElement.removeChild(icon);
        document.getElementById("after_load").style.display = "block";
    }

</script>

</html>
