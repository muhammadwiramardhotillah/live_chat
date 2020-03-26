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
							<form action="login-action.php" method="post">
								<p class="text-danger"><?php echo @$message; ?></p>
								<div class="form-group">
									<label for="email">Email</label>
									<input class="form-control" type="text" id="email" name="email" placeholder="Your email..">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input class="form-control" type="password" id="password" name="password" placeholder="Your password..">
								</div>
								<div class="form-group">
									<button class="btn btn-info">Login</button>
								</div>
							</form>
							<p>Not registered yet? Click <a href="register.php">registration</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html> 