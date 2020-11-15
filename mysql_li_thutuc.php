<?php 
// BƯỚC 1: TẠO DATABASE
// Tạo kết nối
$conn = mysqli_connect('localhost', 'root', '');
  
// Nếu kết nối thất bại
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
  
// Lệnh tạo database
$sql = "CREATE DATABASE FreettusDemo";
  
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) 
{
    echo 'Tạo database thành công!';
     
    // BƯƠC 2: TẠO TABLE
    // Chọn database
    mysqli_select_db($conn, 'FreettusDemo');
     
    // Câu lệnh SQL
    $sql = "CREATE TABLE News (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        content TEXT,
        add_date TIMESTAMP
    )";
     
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
        echo "Tạo table thành công";
    } else {
        echo "Tạo table thất bại: " . mysqli_error($conn);
    }
     
} else {
    echo "Tạo database thất bại: " . mysqli_error($conn);
}
  
// Tạo xong thì ngắt kết nối
mysqli_close($conn);
 ?>