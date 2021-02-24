<?php
//===========================
// showSize.php
//===========================
// 1. Connect (Database)
//===========================
    require("connectDB.php");

//===========================
// 2. Select (SQL)
//===========================
    $sql = "SELECT SIZE_ID, SIZE_DETAIL FROM size";

//===========================
// 3. Execute (SQL)
//===========================
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {  // พบข้อมูลในตาราง size
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "SIZE ID: " . $row["SIZE_ID"]. " - SIZE DETAIL: " . $row["SIZE_DETAIL"]. "<br>";
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
?>