<html>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'saffron';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connection Successful";
}
mysqli_close($conn);
?>
