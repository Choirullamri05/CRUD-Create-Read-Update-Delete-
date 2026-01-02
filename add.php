<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO barang (nama_barang, stok, harga)
            VALUES ('$nama_barang', '$stok', '$harga')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a2a4a6ff;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            margin-top: 60px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container col-md-6">
    <h3 class="mb-4">Tambah Barang</h3>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
