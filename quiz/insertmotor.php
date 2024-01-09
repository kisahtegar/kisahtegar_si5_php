<?php
	// Koneksi ke mysql
	$conn = mysqli_connect("localhost", "root", "", "persediaandb");

	if (mysqli_connect_errno()) {
		echo "Koneksi Gagal".mysqli_connect_errno();
	}

	{
		$vkdmotor = $_POST['txtkdmotor'];
		$vnmmotor = $_POST['txtnmmotor'];
		$vwarna = $_POST['cbwarna'];
		$vharga = $_POST['txtharga'];
		{
			$query = mysqli_query($conn, "insert into motor(kdmotor, nmmotor, warna, harga) values('$vkdmotor', '$vnmmotor', '$vwarna', '$vharga')");
			
			if ($query)
				echo "Input Data Sukses<br>";
			else
				echo "Input Data Gagal<br>";
		}
		// header("location:motor.php");
	}

?>

<a href="LaporanDataMotor.php">lihat data</a>