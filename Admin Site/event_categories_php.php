<?php
if(isset($_FILES['image'])){
$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$event_name = $_POST['event_name'];
$date = $_POST['date'];
$date = date("Y-m-d H:i:s", strtotime($date));
$color = $_POST['color'];
$link = $_POST['link'];
$type = $_POST['type'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
    
$target_dir = "../images/";
$temp = explode(".", $_FILES['image']['name']);
$image = "event".round(microtime(true)).".".end($temp);
$target_file = $target_dir.basename($image);
        
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
$query = "INSERT INTO event_categories (event_name,date,color,link,type,image) VALUES (?, ?, ?, ?, ?, ?)";
$statement = $conn->prepare($query);
$statement->bind_param('ssssis', $event_name, $date, $color, $link, $type, $image );
$statement->execute();
$statement->close();
}

ob_start();
Header("Location: ./event_categories.php");
ob_end_flush();
die();
?>
