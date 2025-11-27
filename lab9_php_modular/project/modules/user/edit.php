<?php
$id = $_GET['id']; // Ambil ID dari URL
// ... (Logika query SELECT data barang berdasarkan ID) ...

if (isset($_POST['submit'])) {
    // ... (Logika UPDATE data) ...
    header('location: index.php?page=user/list');
}
?>
<h2>Ubah Barang</h2>
<form method="post" action="index.php?page=user/edit&id=<?= $id ?>" enctype="multipart/form-data">
    </form>