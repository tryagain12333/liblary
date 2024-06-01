<!-- edit_sanpham.php -->
<?php
include 'db.php';

if (isset($_GET['masp'])) {
    $masp = $_GET['masp'];
    
    $sql = "SELECT * FROM sanpham WHERE masp=$masp";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    
    $sql = "UPDATE sanpham SET tensp='$tensp', soluong='$soluong' WHERE masp=$masp";
    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật sản phẩm thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Sửa sản phẩm</h1>
        </div>
    </header>
    <div class="container">
        <form method="POST" action="">
            <input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
            <label for="tensp">Tên sản phẩm:</label><br>
            <input type="text" id="tensp" name="tensp" value="<?php echo $row['tensp']; ?>"><br><br>
            <label for="soluong">Số lượng:</label><br>
            <input type="number" id="soluong" name="soluong" value="<?php echo $row['soluong']; ?>"><br><br>
            <input type="submit" value="Cập nhật">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Quản lý kho hàng</p>
    </footer>
</body>
</html>
