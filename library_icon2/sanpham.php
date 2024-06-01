<!-- sanpham.php -->
<?php
include 'db.php';
$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Danh sách sản phẩm</h1>
        </div>
    </header>
    <div class="container">
        <table border="1">
            <tr>
                <th>Mã SP</th>
                <th>Tên SP</th>
                <th>Số lượng</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["masp"]. "</td><td>" . $row["tensp"]. "</td><td>" . $row["soluong"]. "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Không có sản phẩm nào</td></tr>";
            }
            ?>
        </table>
    </div>
    <footer>
        <p>&copy; 2024 Quản lý kho hàng</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
