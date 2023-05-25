<?php
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$con = mysqli_connect("localhost", "root", "", "dbdbdip");
	$sql = "insert into user(name, password, email) values('$name', '$password', '$email')";

	mysqli_query($con, $sql);
	mysqli_close($con);

?>