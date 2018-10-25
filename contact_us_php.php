<?php

$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
$query1 = $_POST['query'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$email = $_POST['email'];

$query = "INSERT INTO subscriber (name,query,number, subject, email) VALUES (?, ?, ?, ?, ?)";
$statement = $conn->prepare($query);
$statement->bind_param('sssss', $name, $query1, $number, $subject, $email);
$statement->execute();
$statement->close();
/*
ob_start();
Header("Location: ./add_member.php");
ob_end_flush();
die();
?>*/
