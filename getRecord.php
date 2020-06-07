<?php
    $con = mysqli_connect('localhost', 'root', 'root', 'user_data');
if(!$con) {

	echo "database error";
}

$dataReturn = array();

$sql="SELECT * FROM `user`";

//echo $sql;
$query_data = mysqli_query($con, $sql);
$user_data =  mysqli_fetch_all($query_data);
if($user_data.length) {
  $dataReturn['data'] = $user_data;
  echo json_encode($dataReturn);
}
else {
    echo $dataReturn['error'] = 'user not found';
}
mysqli_close($con);
?>



