<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="login-form">
	<form action="authentication.php" method="post">
		<fieldset>
			<legend>Login</legend>
				<table class="login-input">
					<tr>
						<td>Email:</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="Password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="submit" name="login" class="btn-default">Login</button>
						<button type="submit" name="register" class="btn-default">Register</button>
						</td>
					</tr>
				</table>
		</fieldset>
	</form>
</div>

</body>
</html>