<?php   
require("checking.php");
if(check_session()){
require("../connection.php");
$conn = connection();
$query = "SELECT * FROM subscriber";
$result = $conn->query($query);
?>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin|Satisfy|Pacifico" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            background-color: gainsboro;
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

        .top_div {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 12%;
            background-color: #214168;
            border-radius: 8px;
            z-index: 99;
            position: fixed;
            margin-left: 0px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            min-width: 331px;
        }

        .display_container {
            width: 100vw;
            padding: 10px 20px;
            background-color: white;
        }

        .sd_container {
            width: 100vw;
            height: 30px;
            box-sizing: border-box;
            border: 1px solid darkslateblue;
            ;
        }

        .left {
            position: absolute;
            margin-left: 10px;
            font-family: muli;
            font-size: 18px;
        }

        .middle {
            position: absolute;
            margin-left: 200px;
            font-family: muli;
            font-size: 18px;
        }

        .right {
            position: absolute;
            margin-left: 600px;
            font-family: muli;
            font-size: 18px;
        }

    </style>
</head>

<body>
    <header class="header">
        <div class="top_div">
            <div class="menu_items"><a href="event_categories.php">Group</a></div>
            <div class="menu_items"><a href="add_member.php">Add Member</a></div>
            <div class="menu_items"><a href="event_upload.php">Add Event</a></div>
            <div class="menu_items"><a href="Articles_Upload.php">Add Interview</a></div>
            <div class="menu_items"><a href="freshers_talk_admin.php">Freshers Talk</a></div>
            <div class="menu_items"><a href="display.php">Subscribers</a></div>
            <div class="menu_items"><a href="#">Home</a></div>
        </div>
    </header>
    <h1 style="font-family: muli; font-size: 30px; margin-top: 100px; text-align: center;"> List of all the Subscriber... </h1>
    <div class="display_container">
        <?php while($row = $result->fetch_assoc()){ ?>
        <div class="sd_container">
            <div class="left">
                <?php echo($row['name']); ?>
            </div>
            <div class="middle">
                <?php echo($row['email']); ?> </div>
            <div class="right">
                <?php echo($row['subject']); ?> </div>
            <?php } ?>
        </div>

    </div>
</body>

</html>
<?php } ?>
