<?php 
try {
    // Chuỗi kết nối
    $conn = new PDO("mysql:host=localhost", 'root', '');
     
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // Câu truy vấn
    $sql = "CREATE DATABASE FreetutsDemo";
     
    // Thực thi câu truy vấn
    $conn->exec($sql);
     
    // Thông báo thành công
    echo "Tạo database thành công";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
 ?>