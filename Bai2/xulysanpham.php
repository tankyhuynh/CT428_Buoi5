<?php
	require_once("./connection.php");
	session_start();
	$iduser = $_SESSION['iduser'];

	$tensp = $_POST['tensp'];
	$chitietsp = $_POST['chitietsp'];
	$giasp = $_POST['giasp'];

	$hinhanh = "./img/" . $_FILES['hinhanh']['name'];
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],$hinhanh);

	$sql= "insert into sanpham(tensp, chitietsp, giasp, hinhanhsp, idtv) values('$tensp','$chitietsp','$giasp','$hinhanh', $iduser)";
	$result=$con->query($sql);

	echo "$sql";

	header('Location: danhsachsanpham.php');
	
?>