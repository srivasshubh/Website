<?php  
require("checking.php");
if(check_session()){
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

        .container {
            width: 100vw;
            height: 100vh;
            margin-top: 100px;
            background-color: #fafafa;
            display: inline-grid;
        }

        .container_member input[type='text'],
        .container_member input[type='file'],
        .container_member select,
        textarea {
            background: rgba(84, 105, 146, 0.2);
            height: 35px;
            width: 60%;
            margin: 18px auto;
            border: none;
            padding: 5px 10px;
            color: #fff;
            font-size: 18px;
            box-sizing: border-box;
            max-width: 96vw;
            border-radius: 15px;
            margin: auto;
            display: flex
        }

        .container_member {
            display: block;
            justify-content: flex-start;
        }

        .container_member input[type='submit'] {
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

        .display_image {
            width: 100%;
            height: 55%;
            border: 1px solid black;
            position: relative;
        }

        .recontainer {
            width: 100%;
            height: 11.2%;
            font-family: corben;
            font-size: 18px;
            color: black;
        }

        .container_member_add {
            margin-left: 1%;
            width: 25%;
            height: 70%;
            border: 2px solid darkslateblue;
            display: inline-block;
        }

        .style_image {
            width: 100%;
            height: 100%;
            position: inherit;
        }

        .container_member_add form {
            font-family: Corben;
            font-size: 22px;
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
    <h1 style="font-family: muli; font-size: 30px; margin-top: 100px; text-align:center;"> Add Members</h1>
    <div class="container">
        <div class="container_member">
            <form method="POST" action="upload_image.php" enctype="multipart/form-data">
                <input type="file" class="recontainer" name="image" /><br/>
                <input type="text" placeholder="Username" class="recontainer" name="Name" value="" required/><br/>
                <input type="text" placeholder="Designation" class="recontainer" name="desig" /><br/>

                <select name="Year" class="recontainer">
             <option value="" disabled selected> Year </option>
            <option value="1"> 1 </option>
            <option value="2>"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            </select><br/>
                <input type="text" placeholder="Fb Link" class="recontainer" name="email" /><br/>
                <input type="submit" / name="submit" value="submit" />
            </form>
        </div>
    </div>
    <?php 
        $conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
        if ($conn->connect_error) {
                echo("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM members";
        
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){
        ?>
    <div class="container_member_add">

        <div class="display_image">
            <img src="../Images/<?php echo($row['image']);?>" class="style_image" />
        </div>
        <form method="POST" action="update_member.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo($row['id']);?>" />
            <input type="file" class="recontainer" name="image" /><br/>
            <input type="text" placeholder="Username" class="recontainer" name="Name" value="<?php echo($row['Name']);?>" required/><br/>
            <input type="text" placeholder="Designation" class="recontainer" name="desig" value="<?php echo($row['designation']);?>" /><br/>

            <?php if($row['year']==1){ ?><select name="Year" class="recontainer">
             <option value="" disabled selected> Year </option>
                <option value="1"> 1 </option>
            <option value="2>" selected> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            </select><br/>
            <?php    } ?>

            <?php if($row['year']==2){ ?><select name="Year" class="recontainer">
             <option value="" disabled selected> Year </option>
            <option value="1"> 1 </option>
            <option value="2>" selected> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            </select><br/>
            <?php     }
            ?>
            <?php if($row['year']==3){ ?> <select name="Year" class="recontainer">
             <option value="" disabled selected> Year </option>
            <option value="1"> 1 </option>
            <option value="2>"> 2</option>
            <option value="3" selected> 3</option>
            <option value="4"> 4</option>
            </select><br/>
            <?php    }
            ?>
            <?php if($row['year']==4){ ?> <select name="Year" class="recontainer">
             <option value="" disabled selected> Year </option>
            <option value="1"> 1 </option>
            <option value="2>"> 2</option>
            <option value="3"> 3</option>
            <option value="4" selected> 4</option>
            </select><br/>
            <?php  }
            ?>
            <input type="text" placeholder="email" class="recontainer" name="email" value="<?php echo($row['email']);?>" /><br/>
            <input type="hidden" name="id" value="<?php echo($row['id']); ?>" />
            <input class="update_value" type="submit" value="Update" name="update" />
            <a href="./remove.php?id=<?php  echo($row['id']); ?>&conf=1"> Delete </a>
        </form>
    </div>
    <?php } ?>
</body>

</html>
<?php } ?>
