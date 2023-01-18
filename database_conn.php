
<?php
$servername = "database-3.cei8rdd5og3m.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Project12";
$database = "id20107545_second_hand";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 // echo "Connected successfully";
?>
