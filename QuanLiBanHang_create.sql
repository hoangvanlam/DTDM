-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2016-11-27 06:38:23.283

-- tables
-- Table: ChiTietHoaDon
CREATE TABLE ChiTietHoaDon (
    MaCT int NOT NULL,
    MaKhachHang int NOT NULL,
    TenKhachHang char(100) NOT NULL,
    DiaChi char(100) NOT NULL,
    SDT int NOT NULL,
    HoaDon_MaHD int NOT NULL,
    MaSP int NOT NULL,
    TenSP char(100) NOT NULL,
    CONSTRAINT ChiTietHoaDon_pk PRIMARY KEY (MaCT)
);

-- Table: HoaDon
CREATE TABLE HoaDon (
    MaHD int NOT NULL,
    KhachHang_MaKhachHang int NOT NULL,
    TenKhachHang char(100) NOT NULL,
    SanPham_MaSP int NOT NULL,
    TenSP char(100) NOT NULL,
    CONSTRAINT HoaDon_pk PRIMARY KEY (MaHD)
);

-- Table: KhachHang
CREATE TABLE KhachHang (
    MaKhachHang int NOT NULL,
    TenKhachHang char(100) NOT NULL,
    DiaChi char(100) NOT NULL,
    SDT int NOT NULL,
    CONSTRAINT KhachHang_pk PRIMARY KEY (MaKhachHang)
);

-- Table: LoaiSanPham
CREATE TABLE LoaiSanPham (
    MaLoai int NOT NULL,
    TenLoai char(100) NOT NULL,
    CONSTRAINT LoaiSanPham_pk PRIMARY KEY (MaLoai)
);

-- Table: SanPham
CREATE TABLE SanPham (
    MaSP int NOT NULL,
    TenSP char(100) NOT NULL,
    LoaiSanPham_MaLoai int NOT NULL,
    TenLoai char(100) NOT NULL,
    CONSTRAINT SanPham_pk PRIMARY KEY (MaSP)
);

-- foreign keys
-- Reference: HoaDon_KhachHang (table: HoaDon)
ALTER TABLE HoaDon ADD CONSTRAINT HoaDon_KhachHang FOREIGN KEY HoaDon_KhachHang (KhachHang_MaKhachHang)
    REFERENCES KhachHang (MaKhachHang);

-- Reference: SanPham_LoaiSanPham (table: SanPham)
ALTER TABLE SanPham ADD CONSTRAINT SanPham_LoaiSanPham FOREIGN KEY SanPham_LoaiSanPham (LoaiSanPham_MaLoai)
    REFERENCES LoaiSanPham (MaLoai);

-- End of file.

