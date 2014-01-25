<?php 
	include_once('validate.php');
 ?>

<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method='POST' action='createuser.php'>
		<center>
		<h2>REGISTRATION FORM</h2>
		<table>
			<tr>
				<td>First Name:</td>
		 <td><input type='text' name='fname' id='fname' onblur='check_fname();'><span id='c_fname'></span></td><br>
		   </tr>
		   <tr>
		<td>Last Name:</td>
		<td><input type='text' name='lname' id='lname' onblur='check_lname();'><span id='c_lname'></span></td><br>
		  </tr>
		   <tr>
		<td>Email:</td> 
		<td><input type='text' name='email' id='email' onblur='check_email();'><span id='c_email'></span></td><br>
		 </tr>
		 <tr>
		 	<td>Password:</td>
		 <td><input type='password' name='password' id='password' onblur='check_password();'><span id='c_password'></span></td><br>
		</tr>
		<tr>
			<td>Confirm-Password:</td>
		 <td><input type='password' id='confirm_pass' onblur='validate_pass();'><span id='confirm'></span></td><br>
		</tr>
	</table>
		
	</form>
	<button type='submit' name='register' class = "btn btn-primary" onclick='validateAll();'>Register</button>
	<u><a href="login.php">Log In</a></u>
	</center>

</body>
</html>