<?php
    session_start();
    $username =$_SESSION['user'];
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

  th{
    background-color: silver;
    padding: 10px 50px;
    border: 2px solid black;
    font-weight: bold;
    text-align: center;
  }

  td{
    padding: 10px 50px;
    border: 2px solid black;
    font-weight: bold;
  }

  tr{
    font-weight: bold;  
  }

  img{
    width: 10%;
    height: auto;
  }




</style>
<body>

<script type="text/javascript">
  
  function show(id){
    var xmlhtpp = new XMLHttpRequest();
    xmlhtpp.onreadystatechange = function(){
      if(xmlhtpp.readyState ==4 && xmlhtpp.status == 200){
        document.getElementById("show").innerHTML = xmlhtpp.responseText;
      }else console.log("errrrr");
    } 
    console.log("idsp:" + id);

    xmlhtpp.open("GET", "xemchitiet.php?idsp=" + id, true);
    xmlhtpp.send();

  }

  

</script>


<?php


            if (isset($_SESSION['user'])) {
                $userID =  $_SESSION['iduser'];
                
                require_once("./connection.php");
                $sql="select * from sanpham where idtv='$userID'";
                $result=$con->query($sql);

                    echo "<form action='logOut.php' method='GET' >";
                     echo "<div align='center'>";
                     echo "<table style='border: 2px solid black' cellpadding='0' cellspacing='0'>";
                     
                    echo "<tr>
                                 <td align='center' colspan='6' style='color:red; border-bottom: 1px dashed red;'><h3 style='margin:5px'> Chào bạn ".$username." !</h3></td>
                             </tr>";

                     echo "<tr> <td colspan='6'>Danh sách sản phẩm của bạn là: </td> </tr>";
                     echo "<form action='logOut.php' method='GET' >";
                     echo     "<tr>
                                  <th style='border: 2px solid black'>STT</th>
                                  <th>Tên sản phẩm</th>
                                  <th>Giá sản phẩm</th>
                                  <th colspan='3'>Lựa chọn</th>   
                                  </tr>";
                   
                    if($result->num_rows > 0){
                
                       while($row=$result->fetch_assoc()){

                        echo    "<tr>
                                  
                                    <td> ".$row['idsp']." </td>
                                    <td onmouseover='showImage(".$row['idsp'].")' onmouseout='hideImage()' > ".$row['tensp']." </td>
                                    <td> ".$row['giasp']." (VND)</td> 
                                    <td> <button type= 'button' onclick = 'show(".$row['idsp'].")'> Xem chi tiết </button> </td> 
                                    <td> <a href='Suasanpham.php?idsp=".$row['idsp']." '> <img src='./img/edit.png'> </a> </td>
                                    <td> <a href='xoasanpham.php?idsp=".$row['idsp']."'> <img src='./img/delete.png'> </a> </td>
                                </tr>";

                       
                     }      
                       

            }
                        
                        echo "</form>";
                        echo "</table>";
                        echo "</div>";
                        $con->close();
                        echo "<div align='center'><tr><input type='submit' value='Đăng xuất'/></tr> </div> ";
                        echo "</form>";



                        echo "<div style = 'margin: 50px' align = 'center' id='show'></div>";
                      
                        

        }
        else {
             header('Location: Dangnhap.html');
        }


        

       
            
?>

</body>
</html>