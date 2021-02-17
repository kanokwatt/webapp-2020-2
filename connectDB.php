<?php
// connectDB.php
//**************************************************************
// 1. CONNECT DATABASE
//**************************************************************
    $servername = "localhost";  // ชื่อของ Database Server
    $username = "root";         // ชื่อผู้ที่มีสิทธิใช้งาน Database
    $password = "";             // รหัสผ่านของผู้ที่มีสิทธิใช้งาน Database
    $dbname = "mydb";           // ชื่อของฐานข้อมูล

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
