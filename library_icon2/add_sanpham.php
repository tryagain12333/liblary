<!-- add_sanpham.php -->
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tensp = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    
    $sql = "INSERT INTO sanpham (tensp, soluong) VALUES ('$tensp', '$soluong')";
    if ($conn->query($sql) === TRUE) {
        echo "Thêm sản phẩm thành công";
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
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Thêm sản phẩm</h1>
        </div>
    </header>
    <div class="container">
        <form method="POST" action="">
            <label for="tensp">Tên sản phẩm:</label><br>
            <input type="text" id="tensp" name="tensp"><br><br>
            <label for="soluong">Số lượng:</label><br>
            <input type="number" id="soluong" name="soluong"><br><br>
            <input type="submit" value="Thêm">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Quản lý kho hàng</p>
    </footer>
</body>
</html>
