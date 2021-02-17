<?php
//===========================
// 1. Connect Database
//===========================
    require("connectDB.php");

//===========================
// 2. Select (SQL)
//===========================
    $sql = "SELECT SIZE_ID, SIZE_DETAIL FROM size";

//===========================
// 3. Execute (SQL)
//===========================
    echo "<table border='1'>";
        echo "<tr><td>SIZE_ID</td><td>SIZE_DETAIL</td></tr>";
        
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) { // 3 rows (S, M, L)
        while($row = mysqli_fetch_assoc($result)) {       
           echo "<tr>";
                echo "<td>" . $row["SIZE_ID"] . "</td>";
                echo "<td>" . $row["SIZE_DETAIL"] . "</td>";
           echo "</tr>";
        }
    } 
    else {
        echo "0 results";
    }

    echo "</table>";
    mysqli_close($conn);    
?>