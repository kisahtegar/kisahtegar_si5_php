<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>

<body>
    <?php

    // Koneksi ke mysql
    $conn = mysqli_connect("localhost", "root", "", "persediaandb");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $query = mysqli_query($conn, "update barang set nmbarang='$_POST[nmbarang]', satuan='$_POST[satuan]', warna='$_POST[warna]', jumlah='$_POST[jumlah]' where kdbarang='$_POST[kdbarang]'");

    ?>

    data sudah di update
    <a href="DaftarBarang.php">lihat data</a>
</body>

</html>