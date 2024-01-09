<?php
	// Koneksi ke mysql
	$conn = mysqli_connect("localhost", "root", "", "persediaandb");

	if (mysqli_connect_errno()) {
		echo "Koneksi Gagal".mysqli_connect_errno();
	}

	{
		$vkdbarang = $_POST['txtkdbarang'];
		$vnmbarang = $_POST['txtnmbarang'];
		$vsatuan = $_POST['cbsatuan'];
		$vwarna = $_POST['cbwarna'];
		$vjumlah = $_POST['txtjumlah'];
		{
			$query = mysqli_query($conn, "insert into barang(kdbarang, nmbarang, satuan, warna, jumlah) values('$vkdbarang', '$vnmbarang', '$vsatuan', '$vwarna', '$vjumlah')");
			
			if ($query)
				echo "Input Data Sukses<br>";
			else
				echo "Input Data Gagal<br>";
		}
		// header("location:barang.php");
	}
?>