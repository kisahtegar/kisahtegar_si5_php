<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proses</title>
</head>

<body>
    <?php

    // Koneksi ke mysql
    $conn = mysqli_connect("localhost", "root", "", "kisahtegar");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $query = mysqli_query($conn, "update kisah set nmmahasiswa='$_POST[nmmahasiswa]', jurusan='$_POST[jurusan]' where npm='$_POST[npm]'");

    ?>

    data sudah di update
    <a href="DaftarMahasiswa.php">lihat data</a>
</body>

</html>