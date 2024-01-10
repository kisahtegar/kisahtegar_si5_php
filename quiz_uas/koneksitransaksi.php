<!-- 
    Nama: Kisah Tegar Putra Abdi
    NPM: 2021804041
-->

<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","dbmotor");
if (mysqli_connect_errno()){
	echo "Koneksi Gagal".mysqli_connect_error();
}
{
	$vkdpembelian = $_POST['txtkdpembelian'];
	$vtanggal=$_POST['txttanggal'];
	$vcbmotor = $_POST['cbmotor'];
	$vhargabeli=$_POST['txthargabeli'];
	$vtype=$_POST['txttype'];
	$vcashorcredit=$_POST['txtcashorcredit'];
	$vcbwarna = $_POST['cbwarna'];
	
	{
	$uqery = mysqli_query($conn,"insert into transaksi (kdpembelian, tanggal, nmmotor, hargabeli, type, cashorcredit, warna) values ('$vkdpembelian','$vtanggal', '$vcbmotor', '$vhargabeli', '$vtype', '$vcashorcredit', '$vcbwarna')");
		if ($query)
			echo "Input Data Sukses<br>";
		else
			echo "Input Gagal <br>";
	}
header("location:transaksi.php");
}
?>