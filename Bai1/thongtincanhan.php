<!DOCTYPE html>
<html>
<head>
	<title>Thong tin ca nhan</title>
</head>
<body>


	<?php 

	    echo "<form action='logOut.php' method='GET' enctype='multipart/form-data >";
    	    if (isset($_COOKIE['user'])) {
    	    	$username =  $_COOKIE['user'];
    	    	require_once("./connection.php");
    		    $sql="select * from thanhvien where tendangnhap='$username'";
    		    $result=$con->query($sql);
    	    	
    	    	if($result->num_rows > 0){
    		
    	           while($row=$result->fetch_assoc()){
                     echo "<div align='center'>";
                     echo    "<table style='border: 2px solid red' cellpadding='0' cellspacing='0'>";
                     echo    "<tr>
                                 <td align='center' colspan='2' style='color:red;font-weight:bold; border-bottom: 1px dashed red;'><h3 style='margin-top:15px'>Chào bạn ".$username." !</h3></td>
                             </tr>";
                     echo    "<tr>
                                 <td rowspan='5'><img src='".$row['hinhanh']."' height='300px' width='300px' style='margin: 20px; border:2px solid black;'></td>
                                 <td width='500px'> <span class= 'label'>Tên đăng nhập:</span> ". $row['tendangnhap'] ."</td>
                             </tr>";
                     echo    "<tr>
                                 <td ><span class= 'label'> Giới tính: </span>".$row['gioitinh']."</td>
                             </tr>";
                     echo    "<tr>
                                 <td><span class= 'label'>Nghề nghiệp: </span>".$row['nghenghiep']."</td>
                             </tr>";
                     echo    "<tr>
                                 <td> <span class= 'label'>Sở thích: </span>".$row['sothich']."</td>
                             </tr>";
                     echo    "<tr>
                                 <td align='center'><input type='submit' value='Đăng Xuất' style='color:white; font-size:15px; background-color:grey; padding:5px'/></td>
                             </tr>";
                     echo "</table>";
                 }
                     
    		  }

              echo "</div>";
                     $con->close();
                    
                     echo "</form>";
    	    }
       		
	?>

 	
</body>
</html>
