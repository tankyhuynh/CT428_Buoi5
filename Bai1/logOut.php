<?php 
	setcookie('user', '', time() - 3600);
    echo "<h1>Log out</h1>";
    header("Location: bai2.html");
?>