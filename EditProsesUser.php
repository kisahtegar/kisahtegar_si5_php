<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <?php

    // Koneksi ke mysql
    $conn = mysqli_connect("localhost", "root", "", "persediaandb");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $query = mysqli_query($conn, "update user set password='$_POST[password]' where username='$_POST[username]'");

    ?>

    data sudah di update
    <a href="DaftarUser.php">lihat data</a>
</body>

</html>