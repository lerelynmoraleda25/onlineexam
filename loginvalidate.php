<?php 
	include_once('config.php');
	include_once('examDAO.php');

	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$password = isset($_POST['password']) ? $_POST['password'] : false;

	if($email && $password) {
		$login = examDAO::loginuser($email,$password);
		if($login){
			echo "<script>Successfully Login</script>";
			header('home.php');
		} else {
			header("location:index.php");
		}
	} else {
		header("location:index.php");
	}
 ?>