<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '1234'; 
$dbname = 'db_testDatabase';

try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
         $userName,
         $userPassword
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'คุณได้เชื่อต่อเข้าสู่ระบบแล้ว:';
} catch (PDOException $e) {
    echo 'ไม่สามารถเชื่อมต่อได้: ' . $e->getMessage();
}
?>