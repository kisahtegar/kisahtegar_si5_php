<?php
	// Koneksi ke mysql
	$conn = mysqli_connect("localhost", "root", "", "kisahtegar");

	if (mysqli_connect_errno()) {
		echo "Koneksi Gagal".mysqli_connect_errno();
	}

	{
		$vnpm = $_POST['txtnpm'];
		$vnmmahasiswa = $_POST['txtnmmahasiswa'];
		$vjurusan = $_POST['cbjurusan'];
		{
			$query = mysqli_query($conn, "insert into kisah(npm, nmmahasiswa, jurusan) values('$vnpm', '$vnmmahasiswa', '$vjurusan')");
			
			if ($query)
				echo "Input Data Sukses<br>";
			else
				echo "Input Data Gagal<br>";
		}
		// header("location:motor.php");
	}

?>

<a href="DaftarMahasiswa.php">lihat data</a>