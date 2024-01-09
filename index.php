<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <style type="text/css"></style> -->
</head>

<body>
	<center>
		<table width="600" height="150" border="1" bgcolor="#00FF99">
			<tr>
				<td>
					<table width="200" height="10">
						<center>
							<h4>PT. SISTEM INFORMASI</h4>
							<b>JL. Raya Serang Km.10 Bitung-Tangerang</b>
							<hr>
							
							<?php
							
							$error = '';
							$username = '';
							$password = '';
							$success = '';

							if (isset($_POST['cmdlogin'])) {
								$username = $_POST['txtuser'];
								$password = $_POST['txtpassword'];
							
								if ($username == '') {
									$error = 'Username Belum Diisi';
								} elseif ($password == '') {
									$error = 'Password Belum Diisi';
								} else {
									// Perintah membandingkan dengan table login
									include "sql.php";
					
									$my_sql = mysqli_query($conn, "SELECT * FROM user where username LIKE '$username' AND password LIKE '$password'");
									$cek = mysqli_num_rows($my_sql);


									if ($cek <> 0) {
										echo "Anda Berhasil...";
										echo "<meta http-equiv=\"refresh\" content=\"2;url=./menu.php\">";
										$_SESSION['nama'] = $username;
										$_SESSION['password'] = $password;
										// include = 'menu.php';
									} else {
										echo "Coba lagi :(";
										echo "<meta http-equiv=\"refresh\" content=\"2;url=./index.php\">";
									}
								}
							}

							if (!isset($_POST['cmdlogin']) || $error != '') {
								if ($error != '') {
									echo "<center>$error</center>";
								}
							}

							?>

							<div id="main">
								<div align="center">Application Login</div>
								<div align="center">
									<table width="195" height="156" border="0" align="center">
										<tr>
											<td width="210" height="20" align="center">
												<form id="form1" method="post" action="">
													<table width="233" height="90" border="0" cellpadding="8" cellspacing="0">
														<!-- Username -->
														<tr bgcolor="silver">
															<td>Username</td>
															<td width="139" bgcolor="silver">
																<label for="txtuser"></label>
																<input name="txtuser" type="text" id="txtuser" size="15" maxlength="15">
															</td>
														</tr>

														<!-- Password -->
														<tr bgcolor="silver">
															<td height="15" bgcolor="silver">Password</td>
															<td bgcolor="silver">
																<label for="txtpassword"></label>
																<input name="txtpassword" type="password" id="txtpassword" size="15" maxlength="15">
															</td>
														</tr>

														<!-- RESEY -->
														<tr bgcolor="#CC9933">
															<td height="30" bgcolor="silver">
																<input type="submit" name="cmdlogin" id="cmdlogin" value="Login">
															</td>
															
															<td bgcolor="silver">
																<input type="reset" name="cmdbatal" id="cmdbatal" value="cancel">
															</td>
														</tr>
													</table>
												</form>
											</td>
										</tr>
									</table>
								</div>
							</div>

							<div align="center">
								
							</div>
						</center>
					</table>
				</td>
			</tr>
		</table>

		<div class="Frame_Footer">
				<div class="Frame_Inside_Footer" style="background-color: #800000; color: #FFFFFF;">
					<span class="style1" style="color: #FFFFFF">Copyrights by Andre Stefanus</span>
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