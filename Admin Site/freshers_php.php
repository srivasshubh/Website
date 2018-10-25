<?php
$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$title = $_POST['title'];
$link = $_POST['link'];
$date = $_POST['date'];
$date = date("Y-m-d H:i:s", strtotime($date));
$description = $_POST['description'];


$query = "INSERT INTO freshers_talk (title,link,date,description) VALUES (?, ?, ?, ?)";
$statement = $conn->prepare($query);
$statement->bind_param('ssss', $title, $link, $date, $description);
$statement->execute();
$statement->close();
ob_start();
Header("Location: ./freshers_talk_admin.html");
ob_end_flush();
die();
?>
