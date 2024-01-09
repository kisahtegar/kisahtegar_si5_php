<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Data Siswa</title>
	</head>
	<body>
		<!-- Body -->
		<center>
			<table width="1350" height="500" border="1" bgcolor="#00FF99">
				<tr>
					<td>
						<center>
							<!-- Title -->
							<table width="400" height="47" border="1" align="center" bgcolor="#999999">
								<tr>
									<td width="400">INPUT DATA BARANG</td>
								</tr>
							</table>

							<!-- Form -->
							<table width="400" border="1" bgcolor="silver">
								<form method="post" action="insert.php">
									<tr>
										<td width="175">Kode Barang</td>
										<td><input type="text" name="txtkdbarang" id="txtkdbarang" size="5"></td>
									</tr>

									<tr>
										<td>Nama Barang</td>
										<td><input type="text" name="txtnmbarang" id="txtnmbarang" size="25"></td>
									</tr>

									<tr>
										<td>Satuan</td>
										<td width="306">
											<select name="cbsatuan" id="cbsatuan">
												<option value="Pcs">Pcs</option>
												<option value="Set">Set</option>
												<option value="Box">Box</option>
												<option value="Kg">Kg</option>
											</select>
										</td>
									</tr>

									<tr>
										<td>Warna</td>
										<td width="306">
											<select name="cbwarna" id="cbwarna">
												<option value="Hitam">Hitam</option>
												<option value="Biru">Biru</option>
												<option value="Putih">Putih</option>
												<option value="None">None</option>
											</select>
										</td>
									</tr>

									<tr>
										<td>Jumlah</td>
										<td><input type="text" name="txtjumlah" id="txtjumlah" size="25"></td>
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