<!-- manage_products.php -->
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 0) {
    header("Location: login.php");
    exit();
}

include 'db.php';

$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Quản lý sản phẩm</h1>
            <a href="add_sanpham.php">Thêm sản phẩm</a>
        </div>
    </header>
    <div class="container">
        <table border="1">
            <tr>
                <th>Mã SP</th>
                <th>Tên SP</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["masp"]. "</td><td>" . $row["tensp"]. "</td><td>" . $row["soluong"]. "</td>";
                    echo "<td><a href='edit_sanpham.php?masp=" . $row["masp"]. "'>Sửa</a> | <a href='delete_sanpham.php?masp=" . $row["masp"]. "'>Xóa</a></td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Không có sản phẩm nào</td></tr>";
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
