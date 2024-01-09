<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Data Mahasiswa</title>
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
									<td width="400">INPUT DATA MAHASISWA</td>
								</tr>
							</table>

							<!-- Form -->
							<table width="400" border="1" bgcolor="silver">
								<form method="post" action="insertMahasiswa.php">
									<tr>
										<td width="175">NPM</td>
										<td><input type="text" name="txtnpm" id="txtnpm" size="5"></td>
									</tr>

									<tr>
										<td>Nama Mahasiswa</td>
										<td><input type="text" name="txtnmmahasiswa" id="txtnmmahasiswa" size="25"></td>
									</tr>

									<tr>
										<td>Jurusan</td>
										<td width="306">
											<select name="cbjurusan" id="cbjurusan">
												<option value="Sistem Informasi">Sistem Informasi</option>
												<option value="Manajemen">Manajemen</option>
												<option value="Teknologi Informasi">Teknologi Informasi</option>
												<option value="None">None</option>
											</select>
										</td>
									</tr>


									<tr>
										<center>
											<td colspan="2">
												<form id="form5" name="form5" method="post" action="">
													<input type="submit" name="btnsave" id="btnsave" value="Save">
													<!-- <input type="reset" name="btnbatal" id="btnbatal" value="Cancel"> -->
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