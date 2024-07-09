
<?php

function connection(){

	
	$connection=mysqli_connect("localhost","root","1234","resort");

	return $connection;
}
?>

# Thêm ngoặc đóng php và thêm pass cho root là 1234 
# đây là thay đổi theo tài khoản phpMyAdmin của tôi ae tự thay theo tài khoản và mật khẩu của ae
