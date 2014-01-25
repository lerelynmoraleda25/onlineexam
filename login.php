<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method='POST' action='loginvalidate.php'>
		<center>
		<h2>LOGIN</h2>
		<table>
		<tr>
			<td>Email:</td>
		<td><input type='text' name='email'></td><br>
		</tr>
		<tr>
			<td>Password:</td>
		<td><input type='password' name='password'></td><br>
		</tr>
		</table>
		<button type='submit' class = "btn btn-primary">Log In</button>
	</center>
	</form>
</body>
</html>