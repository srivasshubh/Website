<?php 
require("connection.php");
$conn = connection();
$query = "SELECT * FROM articles ORDER BY date DESC";
$result = $conn->query($query);
$query2 = "select event_name from event_categories";
$result2 = $conn->query($query2);
$query4 = "select event_name from event_categories";
$result4 = $conn->query($query4);
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin|Satisfy|Pacifico" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-image: url(Images/image6.jpg);
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

        .top_after_header {
            width: 100vw;
            height: 100vh;
            display: flex;
        }

        .left_big_side {
            background-color: transparent;
            position: relative;
            flex: 2;
        }

        .right_small_side {
            background-color: transparent;
            position: relative;
            flex: 1;
        }

        .article_image {
            position: absolute;
            padding: 28% 48%;
            margin-left: 2.5%;
            margin-top: 13%;
            background-color: transparent;
            border-radius: 10px;
            box-sizing: border-box;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .interview_container {
            position: absolute;
            height: 80%;
            width: 80%;
            background-color: transparent;
            border-radius: 20px;
            margin-left: 10%;
            margin-top: 23%;
            border-bottom: 1px solid #505050;
            border-right: 1px solid #505050;
            box-shadow: 0px 3px 3px grey;
        }

        .interview_image {
            width: 170px;
            height: 170px;
            position: absolute;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            margin-left: 20%;
            margin-top: 20px;
            border-radius: 200px;
        }

        .lower_interview_div {
            width: 100%;
            height: 60%;
            background-color: transparent;
            margin-top: 205px;
        }

        .lower_interview_div h1 {
            margin-left: 20px;
            font-family: corben;
            color: darkblue;
            font-size: 26px;
        }

        .lower_interview_div h2 {
            margin-left: 40px;
            font-family: karla;
            color: #505050;
            font-size: 20px;
        }

        .lower_interview_div h3 {
            font-family: muli;
            margin-left: 10px;
        }

        @media (max-width: 650px) {
            .top_after_header {
                flex-direction: column;
                margin-top: 130px;
                display: block;
            }
            .interview_container {
                height: unset;
                margin-top: 0px;
            }
            .article_image {
                position: static;
            }
            .interview_image {
                width: 160px;
                height: 160px;
            }
            .lower_interview_div h1 {
                margin-top: -30px;
                font-size: 22px;
            }
            .lower_interview_div h2 {
                font-size: 20px;
            }

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

        @media (max-width: 970px) {
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
        <div style="width:120px; height:100px; margin:auto; background-image: url('./Images/logo.png'); animation: loader; animation-duration: 4s; animation-iteration-count: infinite; background-size: contain; background-position:center; background-repeat: no-repeat;"></div>
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
        <?php while($row = $result->fetch_assoc()){ ?>
        <div class="top_after_header">
            <div class="image_holder"></div>
            <div class="left_big_side">
                <div class="article_image" style="background-image: url(./images/<?php echo($row['image']); ?>);"> </div>
            </div>
            <div class="right_small_side">
                <div class="interview_container">
                    <div class="interview_image" style="background-image:url(./images/<?php echo($row['ent_image']); ?>);"></div>
                    <div class="lower_interview_div">
                        <h1>
                            <?php echo($row['name']); ?>
                        </h1>
                        <h2>
                            <?php echo($row['college']); ?>
                        </h2>
                        <h2>
                            <?php echo($row['designation']); ?>
                        </h2>
                        <h3> Publish By:</h3>
                        <h2>
                            <?php echo($row['publisher']); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: black" />
        <?php } ?>
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
