<html>
    <head><title>Add Size</title></head>
    <body>
        <form action="updateSize.php" method="GET">
            <table border='1'>
                <tr>
                    <td>รหัส Size:</td>
                    <td><input type="text" name="size_id" size="3"></td>
                </tr>
                <tr>
                    <td>รายละเอียด Size:</td>
                    <td><input type="text" name="size_detail"></td>
                </tr>     
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add">
                        <input type="reset" value="Clear">
                    </td>
                </tr>                             
            </table>
        </form>
    </body>
</html>