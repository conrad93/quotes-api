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
    <title>View Quotes</title>
    <?php include ('../headerLinks.php'); ?>
	<?php include ('adminHeader.php'); ?>
</head>
<body>
    <?php include ('navbar.php'); ?>
    <div class="my-4 py-2"></div>
    <div class="container-fluid">
        <div class="row justify-content-center" id="alertEl">
			<div class="col-5 col-md-6 col-sm-12">
				<div class="alert alert-success" role="alert">
					Quote deleted.
				</div>
			</div>
		</div>
        <div class="row">
			<div class="col-12">
				<h3 class="text-dark text-center p-3">View Quotes</h3>
			</div>
		</div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow p-3">
                    <div class="table-responsive">
                        <table id="quotesTable" class="table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Quotes</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once('config.php');
                                    $query = "SELECT quotes.*, admin_register.name FROM quotes JOIN admin_register ON admin_register.id = quotes.admin_id";
                                    $result = mysqli_query($conn, $query);
                                    $i = 1;
                                    while ($res = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++;?></th>
                                    <td><?php echo $res['name'];?></td>
                                    <td><?php echo $res['author'];?></td>
                                    <td><?php echo $res['quote'];?></td>
                                    <td>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteQuote(<?php echo $res['id'];?>)">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <a class="btn btn-primary" href="./editQuote.php?id=<?php echo $res['id'];?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Confirm deleting quote.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-outline-danger" id="yesBtnDM">Yes</button>
                </div>
            </div>
        </div>
    </div>
  
    <?php include ('../footer.php'); ?>
    <?php include ('../scriptTags.php'); ?>
	<?php include ('adminScripts.php'); ?>
    <?php
		if (isset($_GET['delSuccess']) && $_GET['delSuccess'] == 1) {
			echo "<script>alertFun('" . $_GET['delSuccess'] . "')</script>";
		} else if(isset($_GET['delSuccess']) && $_GET['delSuccess'] == 0){
			echo "<script>alertFun('" . $_GET['delSuccess'] . "')</script>";
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