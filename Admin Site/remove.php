<?php
if(isset($_GET['conf'])){
    $id = $_GET['id'];
    $conn = new mysqli("localhost","shubham","Shubh","ecell");
    if($conn->connect_error){
        echo("Connection Failed". $conn->connect_error);
    }
    $query = "DELETE FROM members where id = $id";
    $conn->query($query);
    $conn->close();
}
ob_start();
Header("Location: ./add_member.php");
ob_end_flush();
die();
?>
