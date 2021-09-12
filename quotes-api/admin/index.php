<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<?php include ('../headerLinks.php'); ?>
	<?php include ('adminHeader.php'); ?>
</head>
<body>
	<div class="container p-5">
		<div class="row justify-content-center" id="loginAlertEl">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="alert alert-danger" role="alert">
					Login failed!
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="card shadow my-3">
					<div class="card-header bg-light text-dark text-center">
						<h5 class="card-title">
							Quotes-API
						</h5>
					</div>
					<div class="card-body">
						<form id="form" method="post" action="loginCheck.php" data-parsley-validate="">
							<div class="form-floating mb-3">
								<input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" data-parsley-type="email" required="">
								<label for="floatingEmail">Email</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" data-parsley-minlength="8" required="">
								<label for="floatingPassword">Password</label>
							</div>
							<div class="mb-3">
								<input class="btn btn-outline-primary" type="submit" value="Login">
								<input class="btn btn-outline-secondary" type="reset" value="Reset">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ('../scriptTags.php'); ?>
	<?php include ('adminScripts.php'); ?>
	<?php
		if (isset($_GET['loginError']) && $_GET['loginError'] == 1) {
			echo "<script>loginAlertFun('" . $_GET['loginError'] . "')</script>";
		} else {
			echo '<script>loginAlertFun("0")</script>';
		}
	?>
</body>
</html>