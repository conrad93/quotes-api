<?php
	session_start();
	if (isset($_SESSION['admin_name']) && $_SESSION['admin_name'] != null) {
		$admin_name = $_SESSION['admin_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include ('../headerLinks.php'); ?>
	<?php include ('adminHeader.php'); ?>
</head>
<body>
    <?php include ('navbar.php'); ?>
    <div class="my-4 py-2"></div>
    <div class="container">
        <div class="row justify-content-center" id="loginAlertEl">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="alert alert-success" role="alert">
					Welcome! <?php echo $admin_name; ?>.
				</div>
			</div>
		</div>
    </div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h3 class="text-dark text-center p-3">Dashboard</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="card shadow my-3">
					<div class="card-header">
						Quotes
					</div>
					<div class="card-body text-center">
						<?php
							require_once('config.php');
							$query = "SELECT COUNT(*) AS count FROM quotes";
							$result = mysqli_query($conn, $query);
							$res = mysqli_fetch_assoc($result);
							mysqli_free_result($result);
							mysqli_close($conn);
						?>
						<h5 class="card-title">Count = <?php echo $res['count'];?></h5>
						<a href="./viewQuotes.php" class="btn btn-outline-primary">View</a>
						<a href="./addQuotes.php" class="btn btn-outline-success">Add</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include ('../footer.php'); ?>
    <?php include ('../scriptTags.php'); ?>
	<?php include ('adminScripts.php'); ?>
	<?php
		if (isset($_GET['loginSuccess']) && $_GET['loginSuccess'] == 1) {
			echo "<script>loginAlertFun('" . $_GET['loginSuccess'] . "')</script>";
		} else {
			echo '<script>loginAlertFun("0")</script>';
		}
	?>
</body>
</html>
<?php
	} else {
		header("Location: index.php");
	}
?>