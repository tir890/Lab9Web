<?php
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<h2>Data Barang</h2>
<a href="index.php?page=user/add" class="btn-tambah">+ Tambah Barang</a>

<table>
    <tr>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php if($result): ?>
    <?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td>
            <img src="assets/img/<?= basename($row['gambar']);?>" alt="<?= $row['nama'];?>" width="50">
        </td>
        <td><?= $row['nama'];?></td>
        <td><?= $row['kategori'];?></td>
        <td><?= number_format($row['harga_jual'],0,',','.');?></td>
        <td><?= number_format($row['harga_beli'],0,',','.');?></td>
        <td><?= $row['stok'];?></td>
        <td>
            <a href="index.php?page=user/edit&id=<?= $row['id_barang'];?>">Ubah</a> |
            <a href="index.php?page=user/delete&id=<?= $row['id_barang'];?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; else: ?>
    <tr>
        <td colspan="7">Belum ada data</td>
    </tr>
    <?php endif; ?>
</table>
<div class="main"></div>