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

    $query = mysqli_query($conn, "select * from barang where kdbarang='$_GET[kdbarang]'");
    $row = mysqli_fetch_array($query);

    ?>

    <form action="editproses.php" method="post">
        <td>
            <pre>
                kdbarang  : <input type="text" name="kdbarang" value="<?php echo $row['kdbarang']; ?>">
                nmbarang  : <input type="text" name="nmbarang" value="<?php echo $row['nmbarang']; ?>">
                satuan    : <input type="text" name="satuan" value="<?php echo $row['satuan']; ?>">
                warna     : <input type="text" name="warna" value="<?php echo $row['warna']; ?>">
                jumlah    : <input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>">
                <input type="submit" value="Update">
            </pre>
        </td>
    </form>
</body>

</html>