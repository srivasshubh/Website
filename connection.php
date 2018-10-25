<?php
function connection(){
    $conn = new mysqli("localhost", "shubham", "Shubh", "ecell");
    if($conn->connect_error){
        return null;
    }
    return $conn;
}
?>
