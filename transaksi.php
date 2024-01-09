<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Transaksi</title>
	</head>
	<body>
		<!-- Body -->
		<?php  
			// Koneksi ke mysql
			$conn = mysqli_connect("localhost", "root", "", "persediaandb");

			if (mysqli_connect_errno()) {
				echo "Koneksi Gagal".mysqli_connect_errno();
			}

			$queryBarang = mysqli_query($conn, "select * from barang");
			$queryCustomer = mysqli_query($conn, "select * from customer");
		?>

		<center>
			<table width="1350" height="500" border="1" bgcolor="#00FF99">
				<tr>
					<td>
						<center>
							<!-- Title -->
							<table width="400" height="47" border="1" align="center" bgcolor="#999999">
								<tr>
									<td width="400">INPUT DATA TRANSAKSI</td>
								</tr>
							</table>

							<!-- Form -->
							<table width="400" border="1" bgcolor="silver">
								<form method="post" action="koneksitransaksi.php">
									<tr>
										<td width="175">Kode Transaksi</td>
										<td><input type="text" name="txtkdtransaksi" id="txtkdtransaksi" size="5"></td>
									</tr>

									<tr>
										<td width="175">Kode Customer</td>
										<td width="306">
											<select name="cbcustomer" id="cbcustomer">
												<?php
												while ($row = mysqli_fetch_array($queryCustomer)) {
													echo "<option value=".$row["kdcustomer"].">".$row["kdcustomer"]."</option>";
												}
												?>
											</select>
										</td>
									</tr>

									<tr>
										<td width="175">Kode Barang</td>
										<td width="306">
											<select name="cbbarang" id="cbbarang">
												<?php
												while ($row = mysqli_fetch_array($queryBarang)) {
													echo "<option value=".$row["kdbarang"].">".$row["kdbarang"]."</option>";
												}
												?>
											</select>
										</td>
									</tr>

									<tr>
										<td>Quantity</td>
										<td><input type="text" name="txtquantity" id="txtquantity" size="25"></td>
									</tr>

									<tr>
										<td>Tanggal</td>
										<td><input type="text" name="txttanggal" id="txttanggal" size="25"></td>
									</tr>

									<tr>
										<center>
											<td colspan="2">
												<form id="form5" name="form5" method="post" action="">
													<input type="submit" name="btnsave" id="btnsave" value="Save">
													<input type="reset" name="btnbatal" id="btnbatal" value="Cancel">
												</form>
											</td>
										</center>
									</tr>
								</form>
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