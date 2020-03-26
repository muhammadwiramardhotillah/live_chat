<?php 
include "connection.php";

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO customers (username, email, password)
					VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>