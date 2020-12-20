<?php

			require_once("./connection.php");
		    $sql = "select * from sanpham where idsp = ".$_GET['idsp']." ";
            $result=$con->query($sql);

            $num_rows=$result->num_rows;

           	if($result->num_rows > 0){
           		while($row=$result->fetch_assoc()){

						echo	"<img src = '". $row['hinhanhsp'] ." ' />";
					}
				}
?>