<?php 
include "connection.php";

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM customers WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	foreach($row as $r) {
		/* $passwordDb = $r['password'];
		$password = password_verify($password,$passwordDb); */
		if (password_verify($_POST['password'],$r['password'])) {
			session_start();
			$_SESSION['customer_id'] = $r['customer_id'];
			$_SESSION['username'] = $r['username'];
			
			// After logging in successfully, then create a subQuery to update the login details table.
			$customer_id = $r['customer_id'];
			$sqlSub = "INSERT INTO customers_details (customer_id) VALUES ($customer_id)";
			$result = mysqli_query($conn, $sqlSub);
			$last_id = mysqli_insert_id($conn);
			$_SESSION['customer_detail_id'] = $last_id;
		} else {
			$message = "<label>Wrong Password</label>";
		}
	}
}

?>