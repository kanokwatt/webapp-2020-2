<?php
// updateSize.php

    $size_id = $_REQUEST["size_id"];
    $size_detail = $_REQUEST["size_detail"];

// 1. Connect
    require("connectDB.php");

// 2. Select (SQL)
    $sql = "INSERT INTO size (SIZE_ID, SIZE_DETAIL) VALUES ($size_id , '$size_detail')";
    
// 3. Execute (SQL)

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    header( "location: showSize.php" );
?>
