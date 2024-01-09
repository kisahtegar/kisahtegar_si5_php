<?php
	// Koneksi ke mysql
	$conn = mysqli_connect("localhost", "root", "", "persediaandb");

	if (mysqli_connect_errno()) {
		echo "Koneksi Gagal".mysqli_connect_errno();
	}

	{
		$vusername = $_POST['txtusername'];
		$vpass = $_POST['txtpass'];
		{
			$query = mysqli_query($conn, "insert into user(username, password) values('$vusername', '$vpass')");
			
			if ($query)
				echo "Input Data Sukses<br>";
			else
				echo "Input Data Gagal, Username sudah tersedia / sesuatu salah<br>";
		}
		// header("location:menu.php");
	}
?>