<?php
    $con = mysqli_connect('localhost', 'root', 'root', 'user_data');
    if($con) {
	echo "connected";
} else {
	echo "database error";
}



$sql="INSERT INTO user(user_name, user_password) VALUES ('$_POST[name]','$_POST[pwd]')";

//echo $sql;

if(mysqli_query($con, $sql)) {
    return "Data submit successfully";
}
else {
    echo "error";
}
mysqli_close($con);
?>



