
<!DOCTYPE HTML>
<html>  
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
		<div class="login">
			<h1>Login</h1>
            
			<form action="login_form_1.php" method="post">

				<label for="username">
					<i class="fas fa-user"></i>
				</label>
                <input type="text" name="username" placeholder="Username" id="username" required>
				
                <label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				
                <input type="submit" value="Login">
			</form>

		</div>
	</body>
</html>
