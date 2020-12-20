<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	td{
		padding: 10px;
		width: 111px;
	}
	
	form{
		width: 31%;
		padding: 5px;
		border: 1px solid black;
		margin: 0 auto;
	}
	
	table{
		padding: 5px;
		background-color: lightgrey;
	}

	.label {
		text-align: center;
		font-weight: bold;
	}

	.header{
		text-align: center;
		font-size: 30px;
		color: red;
		font-weight: bold;
	}
/*	img {
		width: 75%;
		height: auto;
	}*/


</style>

<body>

	<?php

		require_once("./connection.php");
        $sql="select * from sanpham where idsp= ".$_GET['idsp']." ";
        $result=$con->query($sql);

        while($row = $result->fetch_assoc()){

				echo "			<h1 class='header'>Sửa sản phẩm mới</h1>
								<p class='label'>Vui lòng nhập đầy đủ thông tin bên dưới để sửa sản phẩm mới</p>
											<form action='xulysanpham.php' method='POST' enctype='multipart/form-data' >
												<table>
												<tr>
													<td>
														<label class='label'>Tên sản phẩm</label>
													</td>
													<td>
														<input name='tensp' type='text' value= ".$row['tensp']." >
													</td>
												</tr>

												<tr>
													<td>
														<label class='label'>Chi tiết sản phẩm</label>
													</td>
													<td>
														<input name='chitietsp' type='text' value= ".$row['chitietsp']." >
													</td>
												</tr>

												<tr>
													<td>
														<label class='label'>Giá sản phẩm</label> 
													</td>
													<td>
														<input name='giasp' type='text' value= ".$row['giasp']." > (VND)
													</td>
												</tr>

												<tr>
													<td>
														<label class='label'>Hình đại diện</label>
													</td>
													<td>
														<input type='file' id='image' name='hinhanh' />
													</td>
													
												</tr>

												<tr>
													<td>
													</td>

													<td>
														<img src=".$row['hinhanhsp']." >
													</td>
												</tr>

												<tr>
													<td></td>
													<td>
														<input type='submit' value='Thêm'>
														<input type='reset' value='Hủy'>
													</td>
												</tr>

												</table>
											</form> " ;
			}
	?>


</body>
</html>