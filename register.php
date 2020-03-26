<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
		 <script src="jquery/jquery-3.4.1.min.js"></script> 
		 <script src="jquery/jquery-ui.js"></script> 
	</head>
	<body>
		<div class="container pt-3">
			<h3>Live Chats Apps</h3>
			<div class="panel panel-default">
				<div class="row">
					<div class="col-sm-4">
						<div class="panel-heading">Chat Application Login</div>
						<div class="panel-body">
							<form action="register-action.php" method="post">
								<p class="text-danger">Message Danger</p>
								<div class="form-group">
									<label for="username">Username</label>
									<input class="form-control" type="text" id="username" name="username" placeholder="Your username..">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input class="form-control" type="text" id="email" name="email" placeholder="Your email..">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input class="form-control" type="password" id="password" name="password" placeholder="Your password..">
								</div>
								<div class="form-group">
									<input class="btn btn-info" type="submit" name="login" value="Register">
								</div>
							</form>
							<p>Already registered? Please <a href="login.php">login</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html> 