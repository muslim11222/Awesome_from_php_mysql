<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'd_database';

$conn = mysqli_connect($hostname, $username, $password, $db_name);


if(isset($_POST['submit'])) {
     $email = $_POST['email'];
     $password = $_POST['password'];
}

$query = "INSERT INTO info_list(email, password) VALUES('$email', '$password')";

$sql = mysqli_query($conn, $query);

if($sql == true) {
     echo '';
} else {
     echo 'data not inserted successfully';
}
?>