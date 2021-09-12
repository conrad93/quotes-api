<?php
    require_once('admin/config.php');
    $query = "SELECT id, quote, author FROM quotes";
    $result = mysqli_query($conn, $query);
    $res=[];
	if($result){
        srand(mktime(0,0,0));
        $randNum = rand(0,mysqli_num_rows($result));
        $counter = 0;
		while($result_assoc=mysqli_fetch_assoc($result)){
            if($counter == $randNum){
                $res[]=$result_assoc;
            }
            $counter++;
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