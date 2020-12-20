
<?php

	require_once("./connection.php");

	$tendangnhap = $_GET['username'];
	
	$sql = "select * from thanhvien where tendangnhap = '$tendangnhap' ";

	$result = $con->query($sql);
	$num_rows=$result->num_rows;

	if(strlen($tendangnhap) > 0){
		if ( $num_rows > 0 ) {
			echo "Tên đăng nhập đã tồn tại";
		}else echo "OK";
	} else echo "Tên đăng nhập trống";

	



 ?>