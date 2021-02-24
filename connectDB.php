<?php
//===========================
// connectDB.php
//===========================
// 1. Connect (Database)
//===========================
    $servername = "localhost";  // ระบุชื่อของ Database Server
    $username = "root";         // ระบุชื่อ Database Admin / Users
    $password = "";             // ระบุรหัสผ่าน Database (Default: ค่าว่าง)
    $dbname = "mydb";           // ระบุชื่อ Database

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

?>
