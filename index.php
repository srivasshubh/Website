<?php 
require("connection.php");
$conn = connection();
$query = "SELECT * FROM event_categories WHERE MONTH(date) - TIME(NOW()) < 6 LIMIT 2";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Gloria+Hallelujah|Shadows+Into+Light|Shadows+Into+Light+Two" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">

    <style>
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
                <div class="menu_items" style="margin-top:14px !important;"><a href=" # "> Campus Events</a>
                    <ul>
                        <li><a href="freshers_talk.php ">Freshers Talk</a> </li>
                        <?php while($row = $result2->fetch_assoc()){ ?>
                        <li>
                            <a href="./start_up.php?event_name=<?php echo($row[ 'event_name']); ?>">
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
        <div class="top_image">
            <div class="image_holder"></div>
            <a href="http://mmmut.ac.in/" target="_blank">
                <div class="mmmut_logo"> </div>
            </a>
            <div class="text_holder">
                <h3 class="e_cell_text"> E - Cell</h3>
                <h4 class="mmm_text"> MMMUT, Gorakhpur</h4>
            </div>
        </div>
        <div class="container1">
            <div class="straight_line"> </div>
            <h2 class="head_text"> Vision and History </h2>
            <div class="content"> MMMUT (formerly Madan Mohan Malaviya Engineering College, Gorakhpur) was established in 1962 with the primary motive to impart quality education and train the youth to take up the future challenges of evolving India. The first and only residential technical University in U.P. with a total strength of 7000 students is presently running five B.Tech. programs along with M.B.A., M.C.A., M.Tech. in 12 disciplines and fulltime Ph.D. programme in number of disciplines as part of Quality Improvement Programme of MHRD and TEQIP-II project. MMMUT has become a leading institution in engineering and management with departments as centers of excellence, imparting high quality education and providing ambience for growth of professionals as excellent human beings as well.

                <br/> <br/> <b><span style="color:darkslateblue;"> Entrepreneurship Cell</span> </b>is students society of MMMUT which focuses primarily to promote entrepreneurial abilities among students. To accomplish this periodic guest lectures, expert talks, workshops and various events of the domain are frequently organized by the cell. Entrepreneurship Cell creates a network of students, alumni, teachers and entrepreneurs together to help out any startup being raised by a student anyway. The Entrepreneurship cell aims to imbibe and promote entrepreneurial qualities in the university students. We believe that entrepreneurs are the engine room of economy, drivers of national wealth.The Entrepreneurship Cell, one of its kind in this region works with the vision of providing the youths an unrivalled opportunity to showcase their talents and ideas.</div>
        </div>
        <div class="container2">
            <div class="font_cont2">Faculty Mentors</div>
            <div class="mentors">
                <div class="mentor_container">
                    <div class="mentor_img">
                        <div class="img"><img alt="" src="Images/IMGFaculty246.jpg"> </div>
                    </div>
                    <div class="mentor_name"> Dr. Sneha Gupta<br>
                        <span> Faculty Advisor </span><br>
                        <br>
                        <span style="color:#121213; font-size: 15px; font-weight: 100; font-style: muli; ">" Assistant Professor"</span> </div>
                </div>
                <div class="mentor_container">
                    <div class="mentor_img">
                        <div class="img"><img alt="" src="Images/image_faculty.jpg"> </div>
                    </div>
                    <div class="mentor_name"> Dr. Diwakar Yadav<br>
                        <span> Head Technical Subcouncil</span><br>
                        <br>
                        <span style="color:#121213; font-size: 15px; font-weight: 100; font-style: muli; ">" Professor"</span> </div>
                </div>
                <div class="mentor_container">
                    <div class="mentor_img">
                        <div class="img"><img alt="" src="Images/IMGFaculty27.jpg"> </div>
                    </div>
                    <div class="mentor_name"> Prof. Rakesh Kumar<br>
                        <span> CSA Chairman </span><br>
                        <br>
                        <span style="color:#121213; font-size: 15px; font-weight: 100; font-style: muli; ">"Professor"</span> </div>
                </div>
            </div>
        </div>
        <div class="container3">
            <div class="top_text"> Thoughts of Entreprenuers</div>
            <br/><br/>
            <hr style="border: 1px solid grey;" />
            <div class="move_cont">
                <div class="testimonials__slide">
                    <div class="author_image"> <img src="Images/Mark_Zuckerberg.jpg" alt="Author image" style="width:100px;
                height: 100px;"> > </div>
                    <div class="author_text"> Move fast and break things. Unless you are breaking stuff, you are not moving fast enough.</div>
                    <div class="testimonials__author">
                        Mark Zuckerberg<br/>
                        <span>FOUNDER, Facebook</span>
                    </div>
                </div>
                <div class="testimonials__slide">
                    <div class="author_image"> <img src="Images/walt_disney.jpg" alt="Author image" style="width:100px;
                height: 100px;"> > </div>
                    <div class="author_text"> All our dreams can come true, if we have the courage to pursue them. </div>
                    <div class="testimonials__author">
                        Walt Disney<br/>
                        <span>FOUNDER, Disney</span>
                    </div>
                </div>
                <div class="testimonials__slide">
                    <div class="author_image"> <img src="Images/Steve_jobs.jpeg" alt="Author image" style="width:100px;
                height: 100px;"> > </div>
                    <div class="author_text"> Be a yardstick of quality. Some people aren’t used to an environment where excellence is expected. </div>
                    <div class="testimonials__author">
                        Steve Jobs<br/>
                        <span>CEO, Apple</span>
                    </div>
                </div>
                <div class="testimonials__slide">
                    <div class="author_image"> <img src="Images/Robert_schuller.jpeg" alt="Author image" style="width:100px;
                height: 100px;"> > </div>
                    <div class="author_text"> Tough times never last, but tough people do.</div>
                    <div class="testimonials__author">
                        Robert H. Schuller<br/>
                        <span>American Christian televangelist</span>
                    </div>
                </div>
                <div class="testimonials__slide">
                    <div class="author_image"> <img src="Images/Michael_dell.jpeg" alt="Author image" style="width:100px;
                height: 100px;"> </div>
                    <div class="author_text"> You don’t have to be a genius or a visionary or even a college graduate to be successful. You just need a framework and a dream. </div>
                    <div class="testimonials__author">
                        Michael Dell<br/>
                        <span>FOUNDER, Dell </span>
                    </div>
                </div>
                <div class="testimonials__slide">
                    <div class="author_image"> <img src="Images/Reid_hoffman.jpg" alt="Author image" style="width:100px;
                height: 100px;"> > </div>
                    <div class="author_text">An entrepreneur is someone who jumps off a cliff and builds a plane on the way down.. </div>
                    <div class="testimonials__author">
                        Reid Hoffman<br/>
                        <span>FOUNDER, Linkedin</span>
                    </div>
                </div>
            </div>

            <div class="circle_cont">
                <div class="small_circle" style="background-color:black" onclick="circle(0)" ;></div>
                <div class="small_circle" onclick="circle(1)" ;></div>
                <div class="small_circle" onclick="circle(2)" ;></div>
                <div class="small_circle" onclick="circle(3)" ;></div>
                <div class="small_circle" onclick="circle(4)" ;></div>
                <div class="small_circle" onclick="circle(5)" ;></div>
            </div>
        </div>
        <div class="container2">
            <div class="font_cont2">Upcoming Events</div>
            <div class="mentors" style="justify-content: space-around;">
                <?php while($row = $result->fetch_assoc()){ ?>
                <div class="mentor_container" style="width: 300px;">
                    <div class="mentor_img">
                        <div class="img15" style="background-image:url(Images/<?php echo($row['image']); ?>);"> </div>
                    </div>
                    <div class="mentor_name" style="font-size: 26px;">
                        <?php echo($row['event_name']); ?><br>
                        <a href="./start_up.php?event_name=<?php echo($row['event_name']);  ?>">
                            <div class=" detailsOf "> Details</div>
                        </a>
                    </div>
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
    var current_index = 0;
    var difference = 95.5;

    function circle(next_index) {

        var circles = document.getElementsByClassName("small_circle ");

        for (var i = 0; i < circles.length; i++) {
            circles[i].style.backgroundColor = 'grey';
        }

        var marg = -100 * (next_index);

        document.getElementsByClassName("move_cont ")[0].style.left = marg + "vw ";
        circles[next_index].style.backgroundColor = "black ";
        //        circles[current_index].style.backgroundColor = "grey ";

    }

    var hidden_menu_visible = 0;

    function showMenu() {
        var HMenu = document.querySelector(".hidden_menu ");
        var logo = document.querySelector('.image_holder');
        if (hidden_menu_visible == 0) {
            HMenu.style.transform = "translate( 0%, 0% ) ";
            logo.style.opacity = "1 ";
            hidden_menu_visible = 1;
        } else {
            hidden_menu_visible = 0;
            HMenu.style.transform = "translate( -100%, 0% ) ";
            logo.style.opacity = "0 ";
        }

    }

    function onLoadHandler() {
        var icon = document.getElementById("loader");
        icon.parentElement.removeChild(icon);
        document.getElementById("after_load").style.display = "block";
    }

</script>

</html>
