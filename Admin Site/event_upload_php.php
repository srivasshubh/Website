<?php
if(isset($_FILES['image'])){
$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$title = $_POST['title'];
$date = $_POST['date'];
$date = date("Y-m-d H:i:s", strtotime($date));
$tagline = $_POST['tagline'];
$event_type = $_POST['event_type'];
$description = $_POST['description'];
$rules = $_POST['rules'];
$coordinator = $_POST['coordinator'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
    
$target_dir = "../images/";
$temp = explode(".", $_FILES['image']['name']);
$image = "event".round(microtime(true)).".".end($temp);
$target_file = $target_dir.basename($image);
        
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
$query = "INSERT INTO events (title,date,tagline,description,rules,coordinator,event_type,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$statement = $conn->prepare($query);
$statement->bind_param('ssssssss', $title, $date, $tagline, $description, $rules, $coordinator,$event_type, $image );
$statement->execute();
$statement->close();
}

ob_start();
Header("Location: ./event_upload.php");
ob_end_flush();
die();
?>
