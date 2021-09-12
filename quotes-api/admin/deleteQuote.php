<?php
  session_start();
	if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] != null) {
		$admin_id = $_SESSION['admin_id'];
        require_once('config.php');
        $id = $_GET['id'];
        
        $query = "DELETE FROM quotes WHERE id = '$id'";
        
        $result = mysqli_query($conn, $query);
        if ($result) {
            $res = array(
                'status' => true
            );
        } 
        else {
            $res = array(
                'status' => false
            );
        }
        mysqli_close($conn);
        echo json_encode($res);
    } else {
        echo json_encode(array('status'=>false));
    }
?>