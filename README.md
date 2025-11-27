# Lab 9 Web - Pemrograman Web Modular (CRUD & Login)

Nama: Tiara Hayatul Khoir

NIM: 312410474

Kelas: TI.24.A5

## 📋 Fitur Aplikasi

* **Modular System:** Kode program dipecah menjadi modul-modul kecil (config, views, modules) agar lebih rapi dan mudah dikelola.
* **Autentikasi User:** Fitur Login dan Logout menggunakan Session.
* **CRUD Data Barang:**
    * Create (Tambah Barang dengan Upload Gambar).
    * Read (Menampilkan Daftar Barang).
    * Update (Mengubah Data Barang).
    * Delete (Menghapus Data Barang).
* **Routing Sederhana:** Menggunakan parameter URL (`?page=...`) untuk navigasi halaman.

## 🛠️ Teknologi yang Digunakan

* **Bahasa:** PHP 7/8
* **Database:** MySQL / MariaDB
* **Server:** Apache (XAMPP)
* **Frontend:** HTML5, CSS3

## 📂 Struktur Folder

```text
lab9_php_modular/
├── config/
│   └── database.php      # Konfigurasi koneksi database
├── modules/
│   ├── auth/
│   │   ├── login.php     # Halaman login
│   │   └── logout.php    # Proses logout
│   └── user/
│       ├── list.php      # Menampilkan tabel data barang
│       ├── add.php       # Form tambah barang
│       ├── edit.php      # Form ubah barang
│       └── delete.php    # Proses hapus barang
├── views/
│   ├── header.php        # Template bagian atas (Navigasi)
│   └── footer.php        # Template bagian bawah (Copyright)
├── assets/
│   ├── css/
│   │   └── style.css     # File styling tampilan
│   ├── js/
│   │   └── script.js     # Script konfirmasi hapus
│   └── img/              # Folder penyimpanan gambar upload
├── index.php             # File utama (Routing & Entry Point)
└── README.md             # Dokumentasi proyek
```

🚀 Cara Instalasi & Menjalankan
1. Persiapan Database
Buat database baru di phpMyAdmin dengan nama latihan1, lalu jalankan query SQL berikut:

```
Tabel data_barang:

SQL

CREATE TABLE data_barang (
    id_barang INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kategori VARCHAR(100),
    harga_beli INT(11),
    harga_jual INT(11),
    stok INT(11),
    gambar VARCHAR(255)
);
Tabel users (Untuk Login):

SQL

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

-- Password default: "admin123"
INSERT INTO users (username, password) 
VALUES ('admin', '$2y$10$uWk3eY.qjC.N5Xy5j6y5hu.v5f5x5j5y5z5a5b5c5d5e5f5g5h');
2. Konfigurasi Project
Pastikan folder project lab9_php_modular tersimpan di dalam folder htdocs (misal: C:\xampp\htdocs\lab9_php_modular).

Cek file config/database.php dan pastikan username/password database sesuai dengan settingan XAMPP kamu (Default: user root, password kosong).

3. Jalankan Aplikasi
Buka browser dan akses: http://localhost/lab9_php_modular/project/

Anda akan diarahkan ke halaman Login.

Gunakan akun default berikut untuk masuk:

Username: admin

Password: admin123

📸 Tangkapan Layar

Halaman Login

Halaman Daftar Barang

Halaman Tambah Data
