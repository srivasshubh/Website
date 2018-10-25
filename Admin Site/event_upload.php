<?php 
require("checking.php");
if(check_session()){
require("../connection.php");
$conn = connection();
$query = "SELECT * FROM events";
$result = $conn->query($query);
$query2 = "SELECT event_name FROM event_categories";
$result2 = $conn->query($query2);
?>


<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin|Satisfy|Pacifico" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <style>
        body {
            background-color: lightgrey;
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

        .contact_us_form {
            box-sizing: border-box;
            padding: 50px;
            text-align: center;
            margin: 50px 0px;
            background: rgba(40, 60, 73, 1.00);
            font-family: karla;
            font-size: 18px;
            margin-left: 50px;
        }

        .contact_us_form span {
            font-family: karla;
            letter-spacing: 2px;
            color: #fff;
            display: inline-block;
        }

        .form input[type='text'],
        .form input[type='file'],
        .form input[type='date'],
        .form select,
        textarea {
            background: white;
            height: 35px;
            width: 90%;
            margin: 18px auto;
            border: none;
            padding: 5px 10px;
            color: black;
            margin-left: 50px;
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
            margin: auto;
            display: flex;
        }

        .all_event_display {
            width: 100vw;
        }

        .sub_event {
            width: 100vw;
            height: 50px;
            display: block;
            position: relative;
        }

        .left_text {
            position: absolute;
            font-size: 20px;
            margin-left: 40px;
        }

        .right_text {
            position: absolute;
            margin-left: 1020px;
            font-size: 20px;
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
    <h1 style="font-family: muli; font-size: 30px; margin-top: 100px; text-align: center;"> Add the event in the respective group</h1>
    <div class="form">
        <form id="contact_us_form" action="event_upload_php.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Event Poster" name="image" onfocus="this.type='file'" required />
            <br/>
            <input type="text" placeholder="Title" name="title" required />
            <br>
            <input type="date" placeholder="Date" name="date" />
            <br>
            <input type="text" placeholder="Event Tagline" name="tagline" required />
            <br/>
            <select name="event_type">
             <option value="" disabled selected> Event Categories </option>
             <?php while($row = $result2->fetch_assoc())
           {  ?>
            <option value="<?php echo($row['event_name']);  ?>"> <?php echo($row['event_name']);  ?> </option> 
           <?php } ?>
            </select><br/>
            <textarea form="contact_us_form" name="description" id="" cols="30" rows="10" placeholder="Event Description" required></textarea>
            <br>
            <textarea form="contact_us_form" name="rules" id="" cols="30" rows="10" placeholder="Event Rules" required></textarea>
            <br>
            <textarea form="contact_us_form" name="coordinator" id="" cols="20" rows="10" placeholder="Event Co-Ordinator" required></textarea>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
    <h1 style="font-family: muli; color: #505050; margin-left: 40PX;"> List of all the events </h1>
    <div class="all_event_display">
        <?php while($row = $result->fetch_assoc()){ ?>
        <div class="sub_event" style="background-color: white;">
            <p class="left_text">
                <?php echo($row['title']); ?>
                <a href="delete_event.php?event_id=<?php echo($row['id']); ?>&event_title=<?php echo($row['title']); ?>">
                    <p class="right_text"> Delete Event </p>
                </a>
                <hr style="color: red;"> </div>
        <?php } ?>
    </div>
</body>

</html>
<?php } ?>
