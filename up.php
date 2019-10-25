<?php 
	if (isset($_POST['submit'])) {
		// Masukkan Konfogurasi Database File
		include_once 'koneksi.php';

		// Konfigurasi File Upload
		$targetDir = "uploads/";
		$allowTypes = array('jpg','png','jpeg','gif');

		$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
		if (!empty(array_filter($_FILES['files']['name']))) {
			foreach ($_FILES['files']['name'] as $key => $value) {
				// File Upload Path
				$fileName = basename($_FILES['files']['name'][$key]);
				$targetFilePath = $targetDir . $fileName;

				// Periksa Jenis File Upload
				$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
				if (in_array($fileType, $allowTypes)) {
					// Upload File ke Server
					if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
						// Gambar Masuk ke SQL
						$insertValuesSQL .= "('".$fileName."', NOW()),";
					} else {
						$errorUpload .= $_FILES['files']['name'][$key].', ';
					}
				} else {
					$errorUploadType .= $_FILES['files']['name'][$key].', ';
				}
			}

			if (!empty($insertValuesSQL)) {
				$insertValuesSQL = trim($insertValuesSQL,',');
				// Masukan Nama File Gambar pada Database
				$insert = $conn->query("INSERT INTO ")
			}
		}
	}
?>