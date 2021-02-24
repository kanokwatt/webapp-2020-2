<?php
//===========================
// showProduct.php
//===========================
// 1. Connect (Database)
//===========================
    require("connectDB.php");

//===========================
// 2. Select (SQL)
//===========================    
    $sql = "SELECT PRODUCT_ID, PRODUCT_DETAIL FROM product";

//===========================
// 3. Execute (SQL)
//===========================
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {  // พบข้อมูลในตาราง size
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "PRODUCT ID: " . $row["PRODUCT_ID"]. " - PRODUCT DETAIL: " . $row["PRODUCT_DETAIL"]. "<br>";
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);  

?>