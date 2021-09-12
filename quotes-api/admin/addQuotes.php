<?php
	session_start();
	if (isset($_SESSION['admin_name']) && $_SESSION['admin_name'] != null && isset($_SESSION['admin_id']) && $_SESSION['admin_id'] != null) {
		$admin_name = $_SESSION['admin_name'];
		$admin_id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quotes</title>
    <?php include ('../headerLinks.php'); ?>
	<?php include ('adminHeader.php'); ?>
</head>
<body>
    <?php include ('navbar.php'); ?>
    <div class="my-4 py-2"></div>
    <div class="container">
        <div class="row justify-content-center" id="alertEl">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="alert alert-success" role="alert">
					Quote added.
				</div>
			</div>
		</div>
    </div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h3 class="text-dark text-center p-3">Add Quotes</h3>
			</div>
		</div>
        <div class="row justify-content-center">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="card shadow my-3">
					<div class="card-body">
						<form id="form" method="post" action="insertQuotes.php" data-parsley-validate="">
							<div class="form-floating my-3">
								<input type="text" name="author" class="form-control" id="floatingAuthor" placeholder="John Doe" required="">
								<label for="floatingAuthor">Author</label>
							</div>
							<div class="form-floating mb-3">
                                <textarea name="quote" class="form-control" placeholder="Leave a quote here" id="floatingTextarea" required=""></textarea>
                                <label for="floatingTextarea">Quotes</label>
							</div>
							<div class="mb-3">
								<input class="btn btn-outline-primary" type="submit" value="Add">
								<input class="btn btn-outline-secondary" type="reset" value="Reset">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include ('../footer.php'); ?>
    <?php include ('../scriptTags.php'); ?>
	<?php include ('adminScripts.php'); ?>
    <?php
		if (isset($_GET['addSuccess']) && $_GET['addSuccess'] == 1) {
			echo "<script>alertFun('" . $_GET['addSuccess'] . "')</script>";
		} else if(isset($_GET['addSuccess']) && $_GET['addSuccess'] == 0){
			echo "<script>alertFun('" . $_GET['addSuccess'] . "')</script>";
		} else {
            echo '<script>alertFun("2")</script>';
        }
	?>
</body>
</html>
<?php
	} else {
		header("Location: index.php");
	}
?>