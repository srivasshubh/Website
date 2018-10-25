<?php
if(isset($_FILES['image'])){
$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['Name'];
$designation = $_POST['desig'];
$year = (int)$_POST['Year'];
$email = $_POST['email'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
    
$target_dir = "../images/";
$temp = explode(".", $_FILES['image']['name']);
$image = "member".round(microtime(true)).".".end($temp);
$target_file = $target_dir.basename($image);
        
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
$query = "INSERT INTO members (Name,designation,year,email,image) VALUES (?, ?, ?, ?, ?)";
$statement = $conn->prepare($query);
$statement->bind_param('ssiss', $name, $designation, $year, $email, $image);
$statement->execute();
$statement->close();
}
ob_start();
Header("Location: ./add_member.php");
ob_end_flush();
die();
?>
