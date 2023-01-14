
<?php
$servername = "localhost";
$username = "id20107545_project123";
$password = "Project12!@#";
$database = "id20107545_second_hand";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 // echo "Connected successfully";
?>
