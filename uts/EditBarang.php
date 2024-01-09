<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <?php

    // Koneksi ke mysql
    $conn = mysqli_connect("localhost", "root", "", "kisahtegar");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $query = mysqli_query($conn, "select * from kisah where npm='$_GET[npm]'");
    $row = mysqli_fetch_array($query);

    ?>

    <form action="editMahasiswaProses.php" method="post">
        <td>
            <pre>
                npm  : <input type="text" name="npm" value="<?php echo $row['npm']; ?>">
                nmmahasiswa  : <input type="text" name="nmmahasiswa" value="<?php echo $row['nmmahasiswa']; ?>">
                jurusan    : <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>">
                <input type="submit" value="Update">
            </pre>
        </td>
    </form>
</body>

</html>