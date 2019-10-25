<section role="main" class="content-body">
	<header class="page-header">
		<h2>Rekap Data</h2>
					
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.php">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Rekap Data</span></li>
			</ol>
					
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
			
			<h2 class="panel-title"><strong>Rekap</strong> Data</h2>
		</header>

		<div class="panel-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="mb-md">
						<button id="addToTable" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
					</div>
				</div>
			</div>
			
			<table class="table table-bordered table-striped mb-none" id="datatable-editable">
				<thead>
					<tr>
						<th style="text-align: center;">Tanggal Pelaksanaan</th>
						<th style="text-align: center;">Nomor Surat</th>
						<th style="text-align: center;">Perihal</th>
						<th style="text-align: center;">Isi Laporan</th>
						<th style="text-align: center;">Pelaksana Tugas</th>
						<th style="text-align: center;">Dokumentasi</th>
						<th style="text-align: center;">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include 'koneksi.php';

						$query = "SELECT*FROM lhp";
						$sql = mysqli_query($conn, $query);
						$row = mysqli_num_rows($sql);

						if ($row > 0) {
							while ($data = mysqli_fetch_array($sql)) {
								echo "<tr>";
								echo "<td>".indoDate($data['tgl_lhp'])."</td>";
								echo "<td>".$data['no_lhp']."</td>";
								echo "<td>".$data['hal_lhp']."</td>";
								echo "<td>".$data['isi_lhp']."</td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td class='actions'>
								<a href='#' class='hidden on-editing save-row'><i class='fa fa-save'></i><a>
								<a href='#' class='hidden on-editing cancel-row'><i class='fa fa-times'></i></a>
								<a href='#' class='on-default edit-row'><i class='fa fa-pencil'></i></a>
								<a href='#' class='on-default remove-row'><i class='fa fa-trash-o'></i></a>
								<a href='?page=ctk&act=print&id_lhp=".$data['id_lhp']."' class='on-default print-row'><i class='fa fa-print'></i></a>
								</td>";
								echo "</tr>";
							}
						}
					?>
				</tbody>
			</table>
		</div>

		<?php
			if (isset($_GET['act'])) {
		        $act = $_GET['act'];

		        switch ($act) {
		            case 'tambah':
		                include "forms.php";
		                break;

		            case 'edit':
		                include "forms.php";
		                break;

		            case 'del':
		                include "rekap-data.php";
		                break;

		            case 'print':
		                include "cetak_lhp.php";
		                break;
		                            
		            default:
		                echo "<center><h3>Halaman tidak ditemukan!</h3></center>";
		                break;
		        }
		    }
		?>
	</section>
	<!-- end: page -->
</section>