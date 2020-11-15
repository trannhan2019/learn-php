<?php 

//Tạo đối tượng connect
$conn = new mysqli('localhost','root','','songbavn');
// Kiểm tra kết nối thành công hay thất bại
if($conn->connect_error){
	die('Kết nối thất bại'. $conn->connect_error);
}
// Thông báo kết nối thành công
echo "Kết nối thành công";
 ?>
