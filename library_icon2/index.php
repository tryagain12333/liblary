<!-- index.php -->
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] == 0) {
    header("Location: manage_products.php");
} else {
    header("Location: sanpham.php");
}
?>
