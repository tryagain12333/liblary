<!-- login.php -->
<?php
include 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM nhanvien WHERE username='$username' AND pass='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];
        
        header("Location: index.php");
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu";
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Đăng nhập</h1>
        </div>
    </header>
    <div class="container">
        <form method="POST" action="">
            <label for="username">Tên đăng nhập:</label><br>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Quản lý kho hàng</p>
    </footer>
</body>
</html>
