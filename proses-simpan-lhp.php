<?php
	// Load File Koneksi
	include "koneksi.php";

	// Ambil Data dari forms.php
	$id_lhp = $_POST['id_lhp'];
	$tgl_lhp = $_POST['tgl_lhp'];
	$no_lhp = $_POST['no_lhp'];
	$hal_lhp = $_POST['hal_lhp'];
	$isi_lhp = $_POST['isi_lhp'];
		
	$query = "INSERT INTO lhp VALUES ('".$id_lhp."','".$tgl_lhp."', '".$no_lhp."', '".$hal_lhp."', '".$isi_lhp."')";
	$sql = mysqli_query($conn, $query);

	// apakah query simpan berhasil?
	if ($sql) {
		// jika berhasil, alihkan ke halaman index.php dengan status = sukses
		header('Location: index.php?page=forms');
	} else {
		// jika gagal, alihkan ke halaman index.php dengan status = gagal
		header('Location: index.php');
	}
?>