<!-- register.php -->
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 1;
    
    $sql = "INSERT INTO nhanvien (username, pass, role) VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
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
    <title>Đăng ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Đăng ký</h1>
        </div>
    </header>
    <div class="container">
        <form method="POST" action="">
            <label for="username">Tên đăng nhập:</label><br>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Đăng ký">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Quản lý kho hàng</p>
    </footer>
</body>
</html>
