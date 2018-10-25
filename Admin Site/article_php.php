<?php
if(isset($_FILES['image'])){
$conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
$college = $_POST['college'];
    $date = $_POST['date'];
$date = date("Y-m-d H:i:s", strtotime($date));
$designation = $_POST['designation'];
$publisher = $_POST['publisher'];
$ent_image = $_FILES['ent_image'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
    
$ent_file_name = $_FILES['ent_image']['name'];
$ent_file_tmp =$_FILES['ent_image']['tmp_name'];
    
$target_dir = "../images/";
$temp = explode(".", $_FILES['image']['name']);
$image = "poster".round(microtime(true)).".".end($temp);
$target_file = $target_dir.basename($image);
        
$temp2 = explode(".", $_FILES['ent_image']['name']);
$ent_image = "entrepreneur".round(microtime(true)).".".end($temp2);
$target_file2 = $target_dir.basename($ent_image);
    
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
move_uploaded_file($_FILES['ent_image']['tmp_name'], $target_file2);
    
$query = "INSERT INTO articles (name,college,date,designation,publisher,ent_image,image) VALUES (?, ?, ?, ?, ?, ?, ?)";
$statement = $conn->prepare($query);
$statement->bind_param('sssssss', $name, $college, $date, $designation, $publisher,$ent_image, $image );
$statement->execute();
$statement->close();
}
ob_start();
Header("Location: ./Articles_Upload.php");
ob_end_flush();
die();
?>
