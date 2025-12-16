<?php
// Ưu tiên lấy từ biến môi trường (trên server), nếu không có thì dùng mặc định (local)
$servername = getenv('DB_SERVER') ?: 'sql309.infinityfree.com';
$username = getenv('DB_USER') ?: 'if0_40696536';
$password = getenv('DB_PASS') ?: 'ZtXJct2ng9TjhL'; // Mật khẩu mặc định XAMPP thường rỗng
$dbname = getenv('DB_NAME') ?: 'if0_40696536_project1';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
