<?php
		require_once("./connection.php");
        $sql="delete from sanpham where idsp= ".$_GET['idsp']." ";
        $result=$con->query($sql);

        header("Location: danhsachsanpham.php");

?>