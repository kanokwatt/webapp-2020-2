<?php
//----------------------
// deleteSize.php
//----------------------
// 1. Request
    $size_id = $_REQUEST['size_id']; // (PK)

//----------------------
// Database
//----------------------
// 1. Connect
    require("connectDB.php");

// 2. Select (SQL)
    $sql = "DELETE FROM size WHERE SIZE_ID = $size_id";

// 3. Execute
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    header( "location: showSize.php" ); // redirect    
?>