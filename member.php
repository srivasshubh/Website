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
    <link rel="stylesheet" type="text/css" href="index.css">
    <style>
        body {
            margin: 0;
            top: 0;
            background-color: snow;
            left: 0;
            transition-duration: 1s;
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

        .burger .l {
            margin: 6px 10px;
            width: 50px;
            height: 5px;
            background: white;
            border-radius: 10px;
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

        .menu_items a:hover {
            border-color: white;
        }

        .top_container {
            width: 95vw;
            display: flex;
            margin: auto;
            margin-top: 50px;
        }

        .text_container {
            margin-top: 100px;
            background-color: #fafafa;
            width: 100vw;
        }

        .image_full_container {
            padding: 18px 60px;
            width: 270px;
            margin-top: 5px;
            display: flex;
            flex-direction: column;
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

        .image_container {
            width: 175px;
            height: 175px;
            border-radius: 1000px;
            overflow: hidden;
            text-align: center;
            top: -20px;
            left: 40px;
            position: relative;
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
            color: blue;
        }

        .image_styling {
            width: 175px;
            height: 175px;
            filter: grayscale(80%);
            transition-duration: 0.5s;
        }

        .fb_image {
            width: 30px;
            height: 30px;
            position: absolute;
            padding: 160px 75px;
            transition-duration: 1s;
            top: 10px;
            opacity: 0;
            display: flex;
            flex-direction: column;
            z-index: 1;
        }

        .image_container:hover .fb_image {
            padding: 80px 75px;
            display: block;
            opacity: 1;
            cursor: pointer;
        }

        .image_container:hover body {
            background-image: url(Images/image6.jpg);
        }

        .image_container:hover .image_styling {
            filter: grayscale(0%);
            cursor: pointer
        }

        .name {
            font-family: muli;
            font-size: 22px;
            color: black;
            display: flex;
            margin: auto;
        }

        .designation {
            font-family: corben;
            font-size: 20px;
            color: blue;
            display: flex;
            margin: auto;
        }

        .image_all_container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: auto;
            width: 100vw;
        }

        .meet {
            font-family: nunito;
            color: darkgray;
            letter-spacing: 2px;
            text-align: center;
        }

        .minds {
            font-family: karla;
            font-size: 24px;
            letter-spacing: 2.5px;
            text-align: center;
            color: #505050;
        }

        .button_container {
            position: relative;
            width: 100vw;
            display: flex;
            flex-wrap: wrap;
        }

        .first_button {
            position: relative;
            width: 140px;
            height: 7vh;
            background-color: darkslateblue;
            margin-left: 20px;
            top: 30px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .first_button:hover .liner {
            width: 70%;
        }

        .first_button h3 {
            font-family: karla;
            font-size: 20px;
            color: #fafafa;
            margin: auto;
            margin-top: 12px;
            display: inline-block;
        }

        .liner {
            transition-duration: 0.6s;
            width: 0;
            margin: auto;
            margin-top: 0px;
            height: 2px;
            background-color: orange;
        }

        .hidden_menu {
            overflow: auto;
            transition-duration: 0.5s;
            position: fixed;
            height: 100vh;
            width: 250px;
            background: #fafafa;
            z-index: 4;
            transform: translate(-100%, 0);
            display: none;
            background: dbdbdb;
            top: 0px;
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

        footer {
            display: flex;
            position: relative;
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


        #final_year {
            display: flex;
        }

        #third_year {
            display: none;
        }

        #second_year {
            display: none;
        }

        .perline {
            width: 70% !important;
        }

        @media (max-width: 800px) {
            .button_container {
                flex-direction: column;
                justify-content: space-around;
            }
            .first_button {
                margin-top: 15px;
            }
        }

        @media (max-width: 883px) {
            .mentors {
                max-width: 500px;
                width: 100vw;
                justify-content: space-around;
            }
            .mentor_container {
                margin: 15px;
            }
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
        <div class="text_container">
            <h1 class="meet"> Meet the Team</h1>
            <h2 class="minds"> The <span style="color:red">M</span><span style="color:orange">i</span><span style="color:dodgerblue">n</span><span style="color:greenyellow">d</span><span style="color: darkmagenta">s</span> behind the ideas </h2>
        </div>
        <div class="button_container">
            <div class="first_button" onclick="open_func1();">
                <h3 id="under_1"> Final Year</h3>
                <div class="liner perline"></div>
            </div>
            <div class="first_button" onclick="open_func2();">
                <h3 id="under_2"> Third Year </h3>
                <div class="liner"></div>
            </div>
            <div class="first_button" onclick="open_func3();">
                <h3 id="under_3">Second Year </h3>
                <div class="liner"></div>
            </div>
        </div>
        <div class="top_container" id="final_year">
            <br/>
            <br/>
            <br/>

            <div class="image_all_container">
                <?php 
            $query = "SELECT * FROM members where year = 4";
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()){ ?>
                <div class="image_full_container">
                    <div class="image_container">
                        <img class="image_styling" src="./Images/<?php echo($row['image']); ?>" alt="loading" />
                        <a href="<?php echo($row['email']); ?>"><img class="fb_image" src="Images/facebook.svg" alt="loading" /></a>
                    </div>
                    <div class="name">
                        <?php echo($row['Name']); ?>
                    </div>
                    <div class="designation">
                        <?php echo($row['designation']); ?> </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="top_container" id="third_year">
            <br/>
            <br/>
            <br/>

            <div class="image_all_container">
                <?php 
            
            $query = "SELECT * FROM members where year = 3";
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()){ ?>
                <div class="image_full_container">
                    <div class="image_container">
                        <img class="image_styling" src="./Images/<?php echo($row['image']); ?>" alt="loading" />
                        <a href="<?php echo($row['email']); ?>"><img class="fb_image" src="Images/facebook.svg" alt="loading" /></a>
                    </div>
                    <div class="name">
                        <?php echo($row['Name']); ?>
                    </div>
                    <div class="designation">
                        <?php echo($row['designation']); ?> </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="top_container" id="second_year">
            <br/>
            <br/>
            <br/>

            <div class="image_all_container">
                <?php
            $query = "SELECT * FROM members where year = 2";
            $result = $conn->query($query);
            
            while($row = $result->fetch_assoc()){ ?>
                    <div class="image_full_container">
                        <div class="image_container">
                            <img class="image_styling" src="./Images/<?php echo($row['image']); ?>" alt="loading" />
                            <a href="<?php echo($row['email']); ?>"><img class="fb_image" src="Images/facebook.svg" alt="loading" /></a>
                        </div>
                        <div class="name">
                            <?php echo($row['Name']); ?>
                        </div>
                        <div class="designation">
                            <?php echo($row['designation']); ?> </div>
                    </div>
                    <?php } ?>
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

    function open_func1() {
        var a = document.getElementById('final_year');
        a.style.display = 'flex';
        var b = document.getElementById('third_year');
        b.style.display = 'none';
        var c = document.getElementById('second_year');
        c.style.display = 'none';
        addliner(1);
    }

    function open_func2() {
        var a = document.getElementById('final_year');
        a.style.display = 'none';
        var b = document.getElementById('third_year');
        b.style.display = 'flex';
        var c = document.getElementById('second_year');
        c.style.display = 'none';
        addliner(2);
    }

    function open_func3() {
        var a = document.getElementById('final_year');
        a.style.display = 'none';
        var b = document.getElementById('third_year');
        b.style.display = 'none';
        var c = document.getElementById('second_year');
        c.style.display = 'flex';
        addliner(3);
    }

    function addliner(a) {
        var v = document.getElementsByClassName('perline')[0];
        v.classList.remove('perline');
        var w = document.getElementsByClassName('liner')[a - 1];
        w.classList.add('perline');
    }

    function onLoadHandler() {
        var icon = document.getElementById("loader");
        icon.parentElement.removeChild(icon);
        document.getElementById("after_load").style.display = "block";
    }

</script>

</html>
