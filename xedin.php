<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Template</title>
		<style type="text/css">
			.mgkop {
				margin-left: 0.5cm;
				margin-right: 0.5cm;
			}

			.mgform {
				margin-left: 1.79cm;
				margin-right: 1.79cm;
				margin-bottom: 1.54cm;
			}

			.t-coll {
				border-collapse: collapse;
			}

			.b-top {
				border-top: 1px solid black;

			}

			.b-right {
				/*border-right: 1px solid black;*/
				border-left: 1px solid black;
			}
		</style>
	</head>

	<body>
		<div class="mgkop">
			<!-- KOP SURAT START -->
			<table align="center">
				<tbody>
					<tr>
						<td style="text-align: center;" width="15%" rowspan="6">
							<img src="img/logo/logo-bw-jateng.png" width="100">
						</td>
					</tr>

					<tr>
						<td align="center" width="85%">
							<span style="font-size: 14pt">
								<font face="Arial">
									PEMERINTAH PROVINSI JAWA TENGAH
								</font>
							</span>	
						</td>
					</tr>

					<tr>
						<td align="center" width="85%">
							<span style="font-size: 20pt">
								<font face="Arial" size="5">
									<strong>DINAS KELAUTAN DAN PERIKANAN</strong>
								</font>
							</span>	
						</td>
					</tr>

					<tr>
						<td align="center" width="85%">
							<font face="Arial">
								<small>Jalan Imam Bonjol Nomor 134 Semarang Kode Pos 50132 Telepon 024-3546469, 3546607</small>
							</font>
						</td>
					</tr>	

					<tr>
						<td align="center" width="85%">
							<font face="Arial">
								<small>Faksimile 024-3551289 Laman http://www.jatengprov.go.id</small>
							</font>
						</td>
					</tr>

					<tr>
						<td align="center" width="85%">
							<font face="Arial">
								<small>Surat Elektronik dkp@jatengprov.go.id</small>
							</font>
						</td>	
					</tr>
				</tbody>
			</table>

			<img src="img/garis-pemisah-header.png" style="width: 100%; height: 7px;">
			<br>
			<br>
			<!-- KOP SURAT END -->
		</div>

		<div class="mgform">	
			<center>
				<font face="Tahoma" size="4.5">
					<strong><u>NOTA DINAS</u></strong>
				</font>
			</center>
			<br>

			<!-- FORM TUJUAN START -->
			<font face="Tahoma">
				<table>
					<tbody>
						<tr>
							<td width="90px">Kepada Yth.</td>
							<td width="1px">:</td>
							<td>Kepala Dinas Kelautan dan Perikanan Provinsi Jawa Tengah</td>
						</tr>

						<tr>
							<td width="90px">Dari</td>
							<td width="1px">:</td>
							<td>Yang Melaksanakan Tugas</td>
						</tr>

						<tr>
							<td width="90px">Tembusan</td>
							<td width="1px">:</td>
							<td>Kasubag. Umum dan Kepegawaian</td>
						</tr>

						<tr>
							<td width="90px">Tanggal</td>
							<td width="1px">:</td>
							<td>
								<input size="50" type="date" name="" id="" value="">
							</td>
						</tr>

						<tr>
							<td width="90px">Nomor</td>
							<td width="1px">:</td>
							<td>
								<input size="50" type="text" name="" id="" value="">
							</td>
						</tr>

						<tr>
							<td width="90px">Hal</td>
							<td width="1px">:</td>
							<td>
								<input size="50" type="text" name="" id="" value="">
							</td>
						</tr>
					</tbody>
				</table>
			</font>
			<!-- FORM TUJUAN END -->

			<!-- FORM ISI START -->
			<font face="Tahoma">
				<table class="t-coll">
					<tbody>
						<tr class="b-top">
							<td valign="top" width="97px"></td>
							<td valign="top" width="5px" class="b-right"></td>
							<td >
								<input type="text" name="">
							</td>
						</tr>
					</tbody>
				</table>
			</font>	
			<!-- FORM ISI END -->

			<!-- FORM DOKUMENTASI START -->
			<font face="Tahoma">
				<table>
					<tbody>
						<tr>
							<form action="upload.php" method="post" enctype="multipart/form-data">
								<td width="90px">Dokumentasi</td>
								<td width="1px">:</td>
								<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
							</form>
						</tr>
					</tbody>
				</table>
			</font>	
			<!-- FORM DOKUMENTASI END -->

			<font face="Tahoma">
				<p align="right">Yang melaksanakan perjalanan Dinas,</p>
			</font>
		</div>

		<!-- Script Auto Print 
		<script type="text/javascript">
			window.print();
		</script>
		 -->	
	</body>
</html>