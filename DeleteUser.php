<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>

<body>
    <?php
    // Koneksi ke mysql
    $conn = mysqli_connect("localhost", "root", "", "persediaandb");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $username = $_GET['username'];

    $query = mysqli_query($conn, "delete from user where username='$username'") or die(mysqli_error($conn));
    ?>

    data sudah di hapus
    <a href="DaftarUser.php">lihat data</a>
</body>

</html>