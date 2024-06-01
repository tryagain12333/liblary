-- Tạo cơ sở dữ liệu qlkhohang
CREATE DATABASE qlkhohang;

-- Sử dụng cơ sở dữ liệu qlkhohang
USE qlkhohang;

-- Tạo bảng nhanvien
CREATE TABLE nhanvien (
    username VARCHAR(50) PRIMARY KEY,
    pass VARCHAR(255) NOT NULL,
    role INT NOT NULL
);

-- Tạo bảng sanpham
CREATE TABLE sanpham (
    masp INT PRIMARY KEY AUTO_INCREMENT,
    tensp VARCHAR(100) NOT NULL,
    soluong INT NOT NULL
);
-- Nhập dữ liệu mẫu vào bảng nhanvien
INSERT INTO nhanvien (username, pass, role) VALUES
('admin', 'hht@2024', 0),
('user1', 'password1', 1);

-- Nhập dữ liệu mẫu vào bảng sanpham
INSERT INTO sanpham (tensp, soluong) VALUES
('San pham 1', 100),
('San pham 2', 200);
