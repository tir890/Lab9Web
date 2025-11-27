<?php
// Proses simpan data (jika tombol simpan ditekan)
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    // Proses Upload Gambar
    if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']);
        // Simpan ke folder assets/img/
        $destination = 'assets/img/' . $filename;
        
        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename; // Simpan path di database (sesuaikan jika perlu)
            // ATAU jika ingin simpan nama filenya saja:
            // $gambar = $filename; 
        }
    }

    // Query Insert Data
    $sql = "INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar) 
            VALUES ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$filename}')";
    
    $result = mysqli_query($conn, $sql);

    // Redirect kembali ke halaman Data Barang
    header('location: index.php?page=user/list');
    exit; // Penting agar script berhenti setelah redirect
}
?>

<h2>Tambah Barang</h2>

<form method="post" action="index.php?page=user/add" enctype="multipart/form-data">
    <div class="input">
        <label>Nama Barang</label>
        <input type="text" name="nama" required />
    </div>
    
    <div class="input">
        <label>Kategori</label>
        <select name="kategori">
            <option value="Komputer">Komputer</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Hand Phone">Hand Phone</option>
        </select>
    </div>
    
    <div class="input">
        <label>Harga Jual</label>
        <input type="number" name="harga_jual" required />
    </div>
    
    <div class="input">
        <label>Harga Beli</label>
        <input type="number" name="harga_beli" required />
    </div>
    
    <div class="input">
        <label>Stok</label>
        <input type="number" name="stok" required />
    </div>
    
    <div class="input">
        <label>File Gambar</label>
        <input type="file" name="file_gambar" />
    </div>
    
    <div class="submit">
        <input type="submit" name="submit" value="Simpan" />
    </div>
</form>