<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Nunito|Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corben|Karla|Lato|Modern+Antiqua|Muli|Source+Sans+Pro" rel="stylesheet">
    <style>
        body {
            background-color: #fafafa;
        }

        h1 {
            font-family: Nunito;
            font-size: 24px;
            color: darkslateblue;
            margin-top: 100;
            text-align: center;
        }

        h2 {
            font-family: muli;
            font-size: 20px;
            color: #505050;
            text-align: center;
        }

        input[type='text'],
        input[type='password'] {
            background: rgba(84, 105, 146, 0.2);
            height: 35px;
            width: 330px;
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

        .container_member {
            padding-top: 25px;
            box-sizing: border-box;
            border-color: #505050;
            width: 350px;
            border: 1px solid grey;
            border-radius: 15px;
            margin-left: 36vw;
            background-color: white;
        }

    </style>
</head>

<body>
    <h1> Welcome to Admin Page</h1>
    <h2> Please enter the Username and Password </h2>
    <div class="container_member">
        <form method="POST" action="event_categories.php">
            <input type="text" name="username" placeholder="User_name" /><br/>
            <input type="password" name="password" placeholder="Password" /><br/>
            <input type="submit" name="log_in" value="Log_in" />
        </form>
    </div>
</body>

</html>
