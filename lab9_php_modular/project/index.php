<?php
session_start();
include("config/database.php");

// 1. Ubah Default page dari 'home' menjadi 'user/list'
// Jadi kalau buka index.php tanpa parameter, langsung buka list barang
$page = isset($_GET['page']) ? $_GET['page'] : 'user/list';

include("views/header.php");

// 2. Gabungkan logika 'home' dan 'user/list'
if ($page == 'home' || $page == 'user/list') {
    // Langsung panggil modul list data barang
    include("modules/user/list.php");
} 
elseif ($page == 'user/add') {
    include("modules/user/add.php");
} 
elseif ($page == 'user/edit') {
    include("modules/user/edit.php");
} 
elseif ($page == 'user/delete') {
    include("modules/user/delete.php");
} 
elseif ($page == 'auth/login') {
    include("modules/auth/login.php");
}
elseif ($page == 'auth/logout') {
    include("modules/auth/logout.php");
}
else {
    echo "<h3>Halaman tidak ditemukan!</h3>";
}

include("views/footer.php");
?>