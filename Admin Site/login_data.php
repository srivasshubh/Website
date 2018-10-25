 <?php

$name = $_POST['username'];
$fathers_name = $_POST['fathers_name'];
$email = $_POST['email'];
$roll_no = $_POST['roll_no'];
$branch = $_POST['branch'];
$pass = $_POST['password'];
echo($name);
$conn = new mysqli("localhost","shubham","Shubh","practical_project");
    if($conn->connect_error){
        echo("Connection error". $conn->connect_error);
    }
echo("Connected Successfully");
$query = "INSERT INTO student_information (Name, fathers_name, email, roll_no, branch, password) VALUES ('$name', '$fathers_name', '$email', '$roll_no', '$branch', '$pass')";
if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

$conn->close();
?>