<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<style type="text/css">
		/*.Style1 {color: #F3F3F3}*/
	</style>
</head>
<body>
	<center>
		<table width="1350" height="500" border="1" bgcolor="silver">
			<tr>
				<td>
					<table width="200" height="10"></table>
					<center>
						<h4>PT. SISTEM INFORMASI</h4>
						<b>JL. Raya Serang Km. 10 Bitung-Tangerang</b>

						<hr>
						<center>
							<table width="322" border="1" bgcolor="#00FF00">
								<tr>
									<td colspan="2">INPUT DATA USER</td>
								</tr>

								<form method="post" action="KoneksiUser.php">
									<tr>
										<td width="175">User Name</td>
										<td><input type="text" name="txtusername" id="txtusername" size="20"></td>
									</tr>

									<tr>
										<td width="175">Password</td>
										<td><input type="text" name="txtpass" id="txtpass" size="20"></td>
									</tr>

									<tr>
										<center>
											<td colspan="2">
												<form id="form5" name="form5" method="post" action="">
													<input type="submit" name="BtnSave" id="BtnSave" value="Save">
													<input type="submit" name="BtnBatal" id="BtnBatal" value="Batal">
												</form>
											</td>
										</center>
									</tr>

								</form>
							</table>
						</center>
					</center>
				</td>
			</tr>
		</table>
	</center>

</body>
</html>