<!-- 
    Nama: Kisah Tegar Putra Abdi
    NPM: 2021804041
-->

<!DOCTYPE html>
<html>
<head>
    <title>PT. SISFO SA - Input Transaksi Pembelian</title>
</head>
<body>
    <?php  
        // Koneksi ke mysql
        $conn = mysqli_connect("localhost", "root", "", "dbmotor");

        if (mysqli_connect_errno()) {
            echo "Koneksi Gagal".mysqli_connect_errno();
        }

        $queryMotor = mysqli_query($conn, "select * from motor");
    ?>

    <center>
        <!-- title -->
        <table width="600" height="47" border="1" align="center" bgcolor="#999999">
            <tr>
                <td>
                    <center>
                        <h1>PT. SISFO SA</h1>
                        <p>JL. Raya Serang KM. 10 Bitung-Tangerang</p>
    
                        <h2>Input Transaksi Pembelian</h2>
                    </center>
                </td>
            </tr>    
        </table>
        
        <!-- Kode Pembelian dan tanggal -->
        <table width="600" height="47" border="0" align="center" bgcolor="#999999">
            <form method="post" action="koneksitransaksi.php">
                <tr>
                    <td>Kode Pembelian:</td>
                    <td><input type="text" name="txtkdpembelian"></td>
                    <td>Tanggal:</td>
                    <td><input type="text" name="txttanggal" id="tanggal" readonly></td>
                </tr>
               
                <tr>
                    <td>Nama Motor:</td>
                    <td>
                    <select name="cbmotor" id="cbmotor">
                        <?php
                            while ($row = mysqli_fetch_array($queryMotor)) {
                                echo "<option value=".$row["nmmotor"].">".$row["nmmotor"]."</option>";
                            }
                        ?>
                    </select>
                    </td>
                    <td>Harga Beli:</td>
                    <td><input type="number" name="txthargabeli"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="txttype"></td>
                    <td>Cash/Kredit:</td>
                    <td><input type="text" name="txtcashorcredit"></td>
                </tr>
                <tr>
                    <td>Warna:</td>
                    <td>
                        <select name="cbwarna" id="cbwarna">
                            <option value="Hitam">Hitam</option>
                            <option value="Biru">Biru</option>
                            <option value="Putih">Putih</option>
                            <option value="None">None</option>
                        </select>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <form id="form5" name="form5" method="post" action="">
                            <input type="submit" name="btnsave" id="btnsave" value="Save">
                            <input type="reset" name="btnbatal" id="btnbatal" value="Cancel">
                        </form>
                    </td>
            </tr>
            </form>
            <script>
                // Fungsi untuk mendapatkan tanggal saat ini dalam format YYYY-MM-DD
                function getTodayDate() {
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0');
                    var yyyy = today.getFullYear();
                    return yyyy + '-' + mm + '-' + dd;
                }

                // Set nilai awal input tanggal dengan tanggal saat ini
                document.getElementById('tanggal').value = getTodayDate();
            </script>
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