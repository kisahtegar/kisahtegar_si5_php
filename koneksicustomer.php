<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","persediaandb");
if (mysqli_connect_errno()){
	echo "Koneksi Gagal".mysqli_connect_error();
}
{
	$vkdcustomer=$_POST['txtkdcustomer'];
	$vnmcustomer=$_POST['txtnmcustomer'];
	$vtlp=$_POST['txttlp'];
	$vemail=$_POST['txtemail'];
	$valamat=$_POST['txtalamat']; 

	{
	$uqery=mysqli_query($conn,"insert into customer (kdcustomer,nmcustomer,tlp,email,alamat) values ('$vkdcustomer','$vnmcustomer','$vtlp','$vemail','$valamat')");
		if ($query)
			echo "Input Data Sukses<br>";
		else
			echo "Input Gagal <br>";
	}
header("location:customer.php");
}
?>