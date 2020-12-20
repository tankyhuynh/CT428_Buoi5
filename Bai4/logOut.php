<?php 
	// setcookie('iduser', '', time() - 3600);
	// setcookie('username', '', time() - 3600);
	session_start();
	session_destroy(); 
    header("Location: Dangnhap.html");
?>