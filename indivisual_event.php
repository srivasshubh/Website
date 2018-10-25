<?php 
if(isset($_GET['event_id']) && $_GET['event_id'] != null){
    require("connection.php");
    $id = (int)$_GET['event_id'];
    $conn = connection();
    $query = "SELECT * FROM events where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $query4 = "select event_name from event_categories"; 
     $result4 = $conn->query($query4);
      $query2 = "select event_name from event_categories";
     $result2 = $conn->query($query2);
    if($row1=$result->fetch_assoc()){
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
            transform: translate(-100%, 0);
            display: none;
            top: 0;
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


        .event_container1 {
            width: 100%;
            height: 120vh;
            margin-top: 80px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .event_rules {
            position: relative;
            padding: 30px 30px;
            margin-top: 25px;
            background-color: #fafafa;
            font-family: lato;
            font-size: 22px;
        }

        .rule_text {
            font-family: fira sans;
            font-size: 30px;
            margin-left: 40px;
            text-shadow: 0px 2px 2px #505050;
            color: darkblue;
            letter-spacing: 3px;
        }

        .event_coordinator {
            margin-top: 20px;
            position: relative;
            background-color: #fafafa;
            height: 240px;
            width: 100%;
        }

        .left_side_content h2 {
            font-family: corben;
            font-size: 24px;
            margin-right: 20px;
            margin-top: 10px;
            float: right;
        }

        .right_side_content h2 {
            font-family: nunito;
            letter-spacing: 2px;
            font-size: 26px;
            margin-left: 40px;
            margin-top: 20px;
            top: 10px;
            position: absolute;
            color: #505050;
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
            .event_container1 {
                height: 60vh;
            }
            .rule_text {
                font-size: 20px;
                margin-left: 10px;
            }
            .event_rules p {
                font-size: 20px;
                font-family: muli;
            }
            .left_side_content h2 {
                margin-top: 160px;
                font-size: 22px;
                float: left;
            }
            .right_side_content h2 {
                font-size: 20px;
                margin-left: 10px;
            }
        }

    </style>
</head>

<body>

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
            <div class="menu_items" style="margin-top:14px !important;"><a href="#"> Campus Events</a>
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
    <div class="event_container1" style="background-image: url(./Images/<?php echo($row1['image']); ?>);">
    </div>
    <h2 class="rule_text"> Description </h2>
    <div class="event_rules">
        <p style="color:#505050">
            <?php echo($row1['description']); ?>
        </p>
    </div>
    <h2 class="rule_text"> Rules </h2>
    <div class="event_rules">
        <p style="color:#505050">
            <?php echo($row1['rules']); ?>
        </p>
    </div>
    <h2 class="rule_text"> Co-Ordinator of the event </h2>
    <div class="event_coordinator">
        <div class="right_side_content">
            <h2>
                <?php echo($row1['coordinator']); ?>
            </h2>
        </div>
        <div class="left_side_content">
            <h2> Tentative Date : <br/>
                <?php echo($row1['date']); ?> </h2>
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

</script>

</html>
<?php }$conn->close();} ?>
