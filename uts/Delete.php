<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Mahasiswa</title>
</head>

<body>
    <?php
    // Koneksi ke mysql
    $conn = mysqli_connect("localhost", "root", "", "kisahtegar");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $npm = $_GET['npm'];

    $query = mysqli_query($conn, "delete from kisah where npm='$npm'") or die(mysqli_error($conn));
    ?>

    data sudah di hapus
    <a href="DaftarMahasiswa.php">lihat data</a>
</body>

</html>