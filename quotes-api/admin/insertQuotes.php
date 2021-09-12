<?php
  session_start();
	if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] != null) {
		$admin_id = $_SESSION['admin_id'];
    require_once('config.php');
    $author = trim($_POST['author']);
    $quote = trim($_POST['quote']);
    
    $query = "INSERT INTO quotes (admin_id, author, quote) values ('$admin_id', '$author', \"$quote\")";
    
    $result = mysqli_query($conn, $query);
    if ($result) {
      header("Location: addQuotes.php?addSuccess=1");
    } 
    else {
      header("Location: addQuotes.php?addSuccess=0");
    }
    mysqli_close($conn);
  } else {
    echo json_encode(array('status'=>false));
  }
?>