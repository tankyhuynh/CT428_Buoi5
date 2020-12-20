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
    
    require_once("./connection.php");

	if (isset($_POST["btn_submits"])) {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from thanhvien where tendangnhap = '$username' and matkhau = '$password' ";
            $result=$con->query($sql);

            $num_rows=$result->num_rows;
			if ($num_rows > 0) {
				while ($row=$result->fetch_assoc()) {
					
					$_SESSION['user'] = $username;
					
	                header('Location: Thongtinthanhvien.php');
				}
			}else{
				header('Location: Dangnhap.html');
			}
		}
	}
?>
</body>
</html>