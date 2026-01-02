<?php
include 'koneksi.php';
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM barang WHERE id='$_GET[id]'"));

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE barang SET
        nama_barang='$_POST[nama_barang]',
        stok='$_POST[stok]',
        harga='$_POST[harga]'
        WHERE id='$_GET[id]'");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #a2a4a6ff;">
<div class="container col-md-6 bg-white p-4 mt-5 rounded">
    <h3>Edit Barang</h3>
    <form method="POST">
        <input type="text" name="nama_barang" value="<?= $data['nama_barang']; ?>" class="form-control mb-2">
        <input type="number" name="stok" value="<?= $data['stok']; ?>" class="form-control mb-2">
        <input type="number" name="harga" value="<?= $data['harga']; ?>" class="form-control mb-3">
        <button name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
