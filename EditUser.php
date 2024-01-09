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

    $query = mysqli_query($conn, "select * from user where username='$_GET[username]'");
    $row = mysqli_fetch_array($query);

    ?>

    <form action="editProsesUser.php" method="post">
        <td>
            <pre>
                username  : <input type="text" name="username" value="<?php echo $row['username']; ?>">
                password  : <input type="text" name="password" value="<?php echo $row['password']; ?>">
                <input type="submit" value="Update">
            </pre>
        </td>
    </form>
</body>

</html>