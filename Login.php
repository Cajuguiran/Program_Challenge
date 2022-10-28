<!DOCTYPE html>
<head>
    <title>LOGIN PHP</title>
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="css/custom.css">
</head>
	<body>
		<div class="container w-25 text-center">
			<div class="card card-container ">
					<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
					<form method="post">
						<select class="form-select form-control mt-3" aria-label="userStatus" name="txtType" autofocus>
							<option value="Admin" selected >Admin</option>
							<option value="Content Manager">Content Manager</option>
							<option value="System User">System User</option>
						</select>

							<input type="text" class="form-control mt-3" name="txtUser" placeholder="Username">
							<input type="password" class="form-control mt-3" name="txtPass" placeholder="Password">
							<button type="submit" class="btn btn-lg btn-primary btn-block btn-signin mt-3" name="btnSignIn">Sign in</button>
					</form>				
			</div>

			<?php  
				$users = array(
					array(
						'type' => 'Admin',
						'username' => 'admin',
						'password' => 'Admin1234',
					),
                    

					array(
						'type' => 'Content Manager',
						'username' => 'pepito',
						'password' => 'manaloto',
					),

					array(
						'type' => 'System User',
						'username' => 'pedro',
						'password' => 'penduko',
					)
				);


				if (isset($_POST['btnSignIn'])) {
					$type = $_POST['txtType'];
					$name = $_POST['txtUser'];
					$pass = $_POST['txtPass'];

					if ($type === $users[0]['type']) {
						if ($name === $users[0]['username']) {
							if ($pass === $users[0]['password']) {
								echo 
								'<div class="alert alert-success alert-dismissable mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
							}									
							else{
							echo 
							'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
								Invalid Username / Password
							</div>';
							}
					}
					elseif ($type === $users[1]['type']) {
						if ($name === $users[1]['username']) {
							if ($pass === $users[1]['password']) {
								echo 
								'<div class="alert alert-success alert-dismissable mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
							}									
							else{
							echo 
							'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
								Invalid Username / Password
							</div>';
							}
					}
					elseif ($type === $users[2]['type']) {
						if ($name === $users[2]['username']) {
							if ($pass === $users[2]['password']) {
								echo 
								'<div class="alert alert-success alert-dismissable mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
							}									
							else{
							echo 
							'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
								Invalid Username / Password
							</div>';
							}
					}								

							else{
							echo 
							'<div class="alert alert-danger alert-dismissable mt-3" role="alert">
								Invalid Username / Password
							</div>';
							}
					}
			?>
		</div>
		<script type="text/javascript" href="js/jquery.js"></script>
		<script type="text/javascript" href="js/boostrap.js"></script>
	</body>
</html>
