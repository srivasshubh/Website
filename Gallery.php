<?php 
require("connection.php");
$conn = connection();
$query2 = "select event_name from event_categories";
$result2 = $conn->query($query2);
$query4 = "select event_name from event_categories";
$result4 = $conn->query($query4);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro|Pacifico" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #fafafa;
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

        .hidden {
            width: 70vw;
            height: 70vh;
            left: 50%;
            z-index: 2;
            top: 50%;
            background-size: contain;
            transform: translate(-50%, -50%) scale(1.1, 1.1);
            position: absolute;
            background-position: center;
            background-repeat: no-repeat;
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
            border-radius: 8px;
            z-index: 99;
            position: fixed;
            margin-left: 0px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            min-width: 331px;
        }

        .place_div {
            position: absolute;
            height: 30%;
            margin-left: 60vw;
            margin-top: 20vh;
        }

        .place_text {
            font-family: corben;
            font-size: 5vw;
            color: white;
            font-weight: bolder;
        }

        .menu_items {
            padding: 5px 20px;
            margin: auto;
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

        .top_div {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 12%;
            border-radius: 8px;
            z-index: 99;
            position: absolute;
            margin-left: 0px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            min-width: 331px;
        }

        .moments {
            width: 100%;
            height: 25vh;
            margin-top: 0px;
            font-family: pacifico;
            text-align: center;
            font-size: 45px;
            color: rebeccapurple;
            letter-spacing: 3px;
            background-color: #f9f9f9;
            box-shadow: 1px 1px 1px 0.5px grey;
            text-decoration: underline grey;
        }

        .menu_items a:hover {
            border-color: black;
        }

        .image_cont {
            width: 100%;
            height: 100vh;
            background: url(Images/camera-macro-optics-122400.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .image_style {
            opacity: 0.7;
            overflow: hidden;
            position: relative;
            transition-duration: 0.5s;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
        }

        .top_grid {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        .zoom {
            position: relative;
            overflow: hidden;
        }

        .zoom:hover img {
            overflow: hidden;
            opacity: 1;
            cursor: zoom-in;
            transform: scale(1.2);
        }

        .zoom:hover {
            border: 1px solid grey;
            border-radius: 15px;
        }

        /* Create four equal columns that sits next to each other */

        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
        }

        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }

        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
            .show_pic {
                display: none !important;
            }
        }

        .show_pic {
            position: fixed;
            z-index: -1;
            height: 100vh;
            width: 100vw;
            top: 0;
            opacity: 0;
        }

        .set_image {
            position: absolute;
            z-index: 1;
            background-image: url(Images/camera-macro-optics-122400.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            filter: blur(2px);
            height: 100vh;
            width: 100vw;
        }

        .cross {
            height: 30px;
            width: 30px;
            position: absolute;
            right: 0vw;
            background-image: url(Images/cross.png);
            background-size: contain;
            cursor: pointer;
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


        @media (max-width: 870px) {
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
            .place_div {
                margin-top: 60vh;
                margin-left: 5vw;
            }
            .place_text {
                font-size: 8vh;
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

        <!-- Header -->
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
                <div class="menu_items"><a href="#"> Campus Events</a>
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
        <div class="show_pic">
            <div class="set_image"> </div>
            <div class="hidden">
                <div class="cross" onclick="close1();"> </div>
            </div>
        </div>
        <div class="image_cont">
            <div class="place_div">
                <h1 class="place_text">
                    E-Cell<br/>Event Gallery
                </h1>
            </div>
            <!-- <img src="Images/camera-macro-optics-122400.jpg" alt="" style="width:100%;height:100%;" /> -->
        </div>
        <div class="moments">
            <h3> Captured Moments </h3>
        </div>

        <!-- Photo Grid -->
        <div class="top_grid">
            <div class="column">
                <div class="zoom"> <img class="image_style" src="Images/gallery1.jpg" style="width:100%" onclick="func1(1);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery2.jpg" style="width:100%;" onclick="func1(2);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery3.jpg" style="width:100%" onclick="func1(3);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(4);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery6.jpg" style="width:100%" onclick="func1(5);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery7.jpg" style="width:100%" onclick="func1(6);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery8.jpg" style="width:100%" onclick="func1(7);"> </div>
            </div>
            <div class="column">
                <div class="zoom"> <img class="image_style" src="Images/gallery9.jpg" style="width:100%" onclick="func1(8);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery10.jpg" style="width:100%;" onclick="func1(9);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery11.jpg" style="width:100%" onclick="func1(10);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(11);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/image1.jpg" style="width:100%" onclick="func1(12);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(13);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery3.jpg" style="width:100%" onclick="func1(14);"> </div>
            </div>
            <div class="column">
                <div class="zoom"> <img class="image_style" src="Images/gallery1.jpg" style="width:100%" onclick="func1(15);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery2.jpg" style="width:100%;" onclick="func1(16);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery3.jpg" style="width:100%" onclick="func1(17);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(18);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/image1.jpg" style="width:100%" onclick="func1(19);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(20);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery3.jpg" style="width:100%" onclick="func1(21);"> </div>
            </div>
            <div class="column">
                <div class="zoom"> <img class="image_style" src="Images/gallery1.jpg" style="width:100%;" onclick="func1(22);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery2.jpg" style="width:100%;" onclick="func1(23);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery3.jpg" style="width:100%" onclick="func1(24);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(25);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/image1.jpg" style="width:100%" onclick="func1(26);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery4.jpg" style="width:100%" onclick="func1(27);"> </div>
                <div class="zoom"> <img class="image_style" src="Images/gallery3.jpg" style="width:100%" onclick="func1(28);"> </div>
            </div>
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

</body>
<script>
    function func1(index) {
        var a = document.getElementsByTagName('img')[index - 1].src;
        console.log(a);
        var b = document.getElementsByClassName('show_pic')[0];
        var c = document.getElementsByClassName('hidden')[0];
        c.style.backgroundImage = "url(" + a + ")";
        b.style.zIndex = "2";
        b.style.opacity = "1";
    }

    function close1() {
        var e = document.getElementsByClassName('show_pic')[0];
        e.style.opacity = "0";
        e.style.zIndex = "-1";
    }

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
