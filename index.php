<!DOCTYPE html>
<html>

<head>
    <title>CRUD Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a2a4a6ff;
        }

        .container {
            background: white;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Data Barang</h3>
        <a href="add.php" class="btn btn-primary mb-3">Tambah Barang</a>

        <table class="table table-striped">
            <tr style="text-align: center;"">
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th style=" width: 110px;">Aksi</th>
            </tr>

            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM barang");
            while ($row = mysqli_fetch_assoc($data)) {

            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td style="text-align: center;">
                        <a href="update.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-success rounded-pill"><i class='bi bi-pencil'></i>
                        </a>
                        <button class="btn btn-danger btn-sm rounded-pill" onclick="hapusData(<?= $row['id']; ?>)">
                            <i class='bi bi-trash'></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

<script>
    function hapusData(id) {
        if (confirm("Hapus data?")) {
            window.location = "delete.php?id=" + id;
        }
    }
</script>

</html>