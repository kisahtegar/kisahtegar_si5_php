<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","persediaandb");
if (mysqli_connect_errno()){
	echo "Koneksi Gagal".mysqli_connect_error();
}
{
	$vkdtransaksi = $_POST['txtkdtransaksi'];
	$vcbcustomer=$_POST['cbcustomer'];
	$vcbbarang=$_POST['cbbarang'];
	$vquantity=$_POST['txtquantity'];
	$vtanggal=$_POST['txttanggal'];
	
	{
	$uqery = mysqli_query($conn,"insert into transaksi (kdtransaksi, kdcustomer, kdbarang, quantity, tanggal) values ('$vkdtransaksi','$vcbcustomer', '$vcbbarang', '$vquantity', '$vtanggal')");
		if ($query)
			echo "Input Data Sukses<br>";
		else
			echo "Input Gagal <br>";
	}
header("location:transaksi.php");
}
?>