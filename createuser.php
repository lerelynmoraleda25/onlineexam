<?php 
	include_once('config.php');
	include_once('examDAO.php');

	$fname = isset($_POST['fname']) ? $_POST['fname'] : false;
	$lname = isset($_POST['lname']) ? $_POST['lname'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$password = isset($_POST['password']) ? $_POST['password'] : false;

	if($fname && $lname && $email && $password) {
		$register = examDAO::createusers($fname,$lname,$email,$password);
		header("location:index.php");
	} else {
		echo "<script>alert('Incomplete')</script>";
	}
?>