
<h1>PHP Here</h1>
<?php

	 require_once("./connection.php");

	$tendangnhap = $_POST['username'];
	$matkhau = md5($_POST['password']);
	$rematkhau = $_POST['repassword'];
	$gender = $_POST['gender'];
	$nghenghiep = $_POST['job'];
	$sothich = implode(" , ", $_POST['hobbies']) . " .";;

	$hinhdaidien = "./img/".$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$hinhdaidien);
	

	$sql = "insert into thanhvien ( `tendangnhap`, `matkhau`, `hinhanh`, `gioitinh`, `nghenghiep`, `sothich`)  values ('$tendangnhap', '$matkhau', '$hinhdaidien', '$gender', '$nghenghiep', '$sothich')";
	echo $sql;
	$result = $con->query($sql);

	echo $result;
	header("Location: thongtincanhan.php");
	
	setcookie("user", "$tendangnhap", time()+600);

	mysqli_close($con);



 ?>