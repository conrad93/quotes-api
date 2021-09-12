<?php
    require_once('admin/config.php');
    $query = "SELECT id, quote, author FROM quotes";
    $result = mysqli_query($conn, $query);
    $res=[];
	if($result){
		while($result_assoc=mysqli_fetch_assoc($result)){
			$res[]=$result_assoc;
		}
        mysqli_free_result($result);
	}
    mysqli_close($conn);
    if($res){
        echo json_encode(array("status"=>true,"data"=>$res));
    } else {
        echo json_encode(array("status"=>false,"data"=>$res));
    }
?>