<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data User</title>
</head>
<body>
	<?php  
		// Koneksi ke mysql
		$conn = mysqli_connect("localhost", "root", "", "persediaandb");

		if (mysqli_connect_errno()) {
			echo "Koneksi Gagal".mysqli_connect_errno();
		}

		$query = mysqli_query($conn, "select * from user");
	?>

	<center>
		<table width="1350" height="500" border="1" bgcolor="#00FF99">
			<tr>
				<td>
					<!-- <table width="800" height="50" align="center" bgcolor="#999999">
						
					</table> -->

					<center>
						<b>
							<h3>PT. SISTEM INFORMASI</h3>
							JL. Raya Serang Km. 10 Bitung-Tangerang
						</b>
						<hr>

						<h3>LAPORAN DATA USER</h3>

						<table border="1" cellpadding="5" cellspacing="0">
							<thead>
								<tr>
									<td>Username</td>
									<td>Password</td>
								</tr>
							</thead>

							<tbody>
								<?php 
									while ($row = mysqli_fetch_array($query)) {
										echo "<tr>";
										echo "<td>".$row['username']."</td>";
										echo "<td>".$row['password']."</td>";
										echo "</tr>";
									}
								?>
							</tbody>
						</table>
					</center>
				</td>
			</tr>
		</table>
	</center>


	<!-- FOOTER -->
	<center>
		<div class="Frame_Footer">
			<div class="Frame_Inside_Footer" style="background-color: #800000; color: #FFFFFF;">
				<span class="style1" style="color: #FFFFFF">Copyrights by Kisah Tegar</span>
				<br class="style1"/>
				<span class="style1">
					<span class="style1">
						&copy; 2023 All Rights Reserved
					</span>
				</span>
			</div>
		</div>
	</center>
</body>
</html>