<?php 
require("../connection.php");
$id = $_GET['event_id'];
$title = $_GET['event_title'];
$conn = connection();
$query = "DELETE FROM events WHERE id=? AND title=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("is", $id, $title);
$stmt->execute();
$conn->close();
ob_start();
Header("Location: ./event_upload.php");
ob_end_flush();
die();
