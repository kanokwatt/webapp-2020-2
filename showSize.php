<html>
    <head><title>Show Size</title></head>
    <body>
        <form action="InsertSize.php" method="GET">
            <table border='1'>
                <tr>
                    <td>รหัส Size:</td>
                    <td><input type="text" name="size_id" size="3"></td>
                </tr>
                <tr>
                    <td>รายละเอียด Size:</td>
                    <td><input type="text" name="size_detail" maxlength="4"></td>
                </tr>     
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add">
                        <input type="reset" value="Clear">
                    </td>
                </tr>                             
            </table>
        </form>

        <table border="1">
            <tr>
                <td>SIZE ID</td>
                <td>SIZE DETAIL</td>
                <td>DELETE</td>
            </tr>
        
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
        echo "<tr>";
            echo "<td>". $row['SIZE_ID']. "</td>";
            echo "<td>". $row['SIZE_DETAIL']. "</td>"; 
            echo "<td><a href='deleteSize.php?size_id=" . $row['SIZE_ID'] . "'>delete</a></td>"; 
        echo "</tr>";

        //echo "SIZE ID: " . $row["SIZE_ID"]. " - SIZE DETAIL: " . $row["SIZE_DETAIL"]. "<br>";
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
?>
        </table>
    </body>
</html>