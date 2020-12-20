<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>Bài 2</title>
<head>

<style type="text/css">
  .label {
    font-weight: bold;
  }


</style>

<body>
<?php 
     require_once("./connection.php");

     
    
       if (isset($_SESSION['user'])) {

          echo "<form action='logOut.php' method='GET' enctype='multipart/form-data >";
           
          $username =$_SESSION['user'];
          $sql="select * from thanhvien where tendangnhap='$username'";
          $result=$con->query($sql);
         
           if($result->num_rows > 0){
              while($row=$result->fetch_assoc()){
                     echo "<div align='center'>";
                     echo    "<table style='border: 5px solid brown' cellpadding='0' cellspacing='0'>";
                     echo    "<tr>
                                 <td align='center' colspan='2' style='color:fuchsia; border-bottom: 1px dashed red;'><h3 style='margin-top:15px'>Xin chào <span style='color:cyan'>".$username." </span>!</h3></td>
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
                     $_SESSION['iduser'] = $row['id'];
                 }
                     echo "</div>";



                     
                    
            }
            echo "<div><a href='danhsachsanpham.php'>Danh sach san pham</a></div>"; 
            echo "<div><a href='Themsanpham.php'>Them san pham</a></div>"; 
            $con->close();
                     

                     echo "</form>";

   }
   else {
      header("Location: Dangnhap.html");
   }
                    
  
      
?>
 

</body>
</html>