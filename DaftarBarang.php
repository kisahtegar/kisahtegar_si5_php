<!DOCTYPE html>
<html>
	<head>
		<title>Daftar barang</title>
	</head>
	<body>
		<?php  
			// Koneksi ke mysql
			$conn = mysqli_connect("localhost", "root", "", "persediaandb");

			if (mysqli_connect_errno()) {
				echo "Koneksi Gagal".mysqli_connect_errno();
			}

			$query = mysqli_query($conn, "select * from barang");
		?>



		<!-- Body -->
		<center>
			<table width="1350" height="500" border="1" bgcolor="#00FF99">
				<tr>
					<td>
						<center>
							<!-- Title -->
							<table width="600" height="47" border="1" align="center" bgcolor="yellow">
								<tr>
									<td width="400"><center>DAFTAR DATA BARANG</center></td>
								</tr>
							</table>

							<!-- Form -->

							<table width="600" border="1" bgcolor="white">
								<tr>
								<td>Kode Barang</td>
								<td>Nama Barang</td>
								<td>Satuan</td>
								<td>Warna</td>
								<td>Jumlah</td>
								<td>Hapus</td>
								<td>Edit</td>
								<td>Kembali</td>
							</tr>
						

							<?php
								while ($row = mysqli_fetch_array($query)) {
									echo "<tr>";
									echo "<td>".$row["kdbarang"]."</td>";
									echo "<td>".$row["nmbarang"]."</td>";
									echo "<td>".$row["satuan"]."</td>";
									echo "<td>".$row["warna"]."</td>";
									echo "<td>".$row["jumlah"]."</td>";
									echo "<td><a href=Delete.php?kdbarang=".$row["kdbarang"].">Delete</a></td>";
									echo "<td><a href=EditBarang.php?kdbarang=".$row["kdbarang"].">Edit</a></td>";
									echo "<td><a href='barang.php'>Back</a></td>";
									echo "<tr>";
								}
							?>
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