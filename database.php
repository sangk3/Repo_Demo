
<?php

function connection(){

	
	$connection=mysqli_connect("localhost","root","1234","resort");

	return $connection;
}
?>

# Thêm ngoặc đóng php và thêm pass cho root là 1234
# Tôi đã chỉnh sửa việc kết nối dễ dàng hơn