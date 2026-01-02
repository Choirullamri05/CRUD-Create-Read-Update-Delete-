<?php
include 'koneksi.php';
mysqli_query($conn, "DELETE FROM barang WHERE id='$_GET[id]'");
?>

<script>
    alert('Data berhasil dihapus!');
    window.location = 'index.php';
</script>
