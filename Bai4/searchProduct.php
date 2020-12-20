
<?php

			require_once("./connection.php");
			$name = $_GET['tensp'];
		    $sql = "select * from sanpham where tensp like '%$name%' ";
            $result=$con->query($sql);

         

            $num_rows=$result->num_rows;

           	if($result->num_rows > 0){
           		while($row=$result->fetch_assoc()){

						// echo	"	
						// 				<div align='center'>
						// 					<table>
						// 						<tr>
						// 							<td>
						// 								Ten sp
						// 							</td>
						// 							<td>
						// 								<label class='label'> ".$row['tensp']." </label>
						// 							</td>
						// 						</tr>

						// 						<tr>
						// 							<td>
						// 								<label class='label'>Chi tiết sản phẩm</label>
						// 							</td>
						// 							<td>
						// 								". $row['chitietsp'] ."
						// 							</td>
						// 						</tr>

						// 						<tr>
						// 							<td>
						// 								<label class='label'>Giá sản phẩm</label> 
						// 							</td>
						// 							<td>
						// 								". $row['giasp'] ."
						// 							</td>
						// 						</tr>

						// 						<tr>
						// 							<td>
						// 								<label class='label'>Hình đại diện</label>
						// 							</td>
						// 							<td>
						// 								<img src = '". $row['hinhanhsp'] ."'>
						// 							</td>
						// 						</tr>

											

						// 					</table>
							
						// 		</div>
						// 		<br><br>
						// 	";

           			
					echo "<a href='xemchitiet.php?idsp=".$row['idsp']." '> ".$row['tensp']." </a> <br>";   


					}
				}
?>
