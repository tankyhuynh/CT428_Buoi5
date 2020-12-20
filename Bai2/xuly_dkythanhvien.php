<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
<?php
       
        $tendangnhap = $_POST['username'];
        $matkhau =md5($_POST['password']);
        $hinhdaidien = "./img/" . $_FILES['image']['name'];
        $gioitinh = $_POST['gender'];
        $nghenghiep = $_POST['job'];
        $sothich = implode($_POST['hobbies'],', ');
        move_uploaded_file($_FILES['image']['tmp_name'],$hinhdaidien);

    require_once("./connection.php");

    $sql= "insert into thanhvien (tendangnhap, matkhau, hinhanh, gioitinh, nghenghiep, sothich) values ('$tendangnhap','$matkhau','$hinhdaidien','$gioitinh','$nghenghiep','$sothich')";

    $con->query($sql);

    // setcookie("user", "$tendangnhap", time()+600);
    $_SESSION['user'] = $tendangnhap;

    $con->close();
    header('Location: Dangnhap.html');
?>

</body>
</html>