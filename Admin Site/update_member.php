<?php
if(isset($_FILES['image'])){
$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['Name'];
$year = (int)$_POST['Year'];
$email = $_POST['email'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
$id = (int)$_POST['id'];
    
$target_dir = "../images/";
$temp = explode(".", $_FILES['image']['name']);
$image = "member".round(microtime(true)).".".end($temp);
$target_file = $target_dir.basename($image);
        
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
$query = "UPDATE members SET Name=?,year=?,email=?,image=? WHERE ID=?";
$statement = $conn->prepare($query);
$statement->bind_param('sissi', $name, $year, $email, $image,$id);
$statement->execute();
$statement->close();
}
ob_start();
Header("Location: ./add_member.php");
ob_end_flush();
die();
?>
