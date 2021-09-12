<?php
  session_start();
	if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] != null) {
        require_once('config.php');
		$id = $_POST['id'];
        $author = trim($_POST['author']);
        $quote = trim($_POST['quote']);
        
        $query = "UPDATE quotes SET author = '$author', quote = \"$quote\" WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
          header("Location: editQuote.php?id=$id&editSuccess=1");
        } 
        else {
          header("Location: editQuote.php?id=$id&editSuccess=0");
        }
        mysqli_close($conn);
  } else {
    echo json_encode(array('status'=>false));
  }
?>