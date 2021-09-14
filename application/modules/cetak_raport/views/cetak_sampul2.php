<!DOCTYPE html>
<html>
<head>
	<title>Cetak Raport</title>
	<style type="text/css">
		body {font-family: arial; font-size: 12pt}
		.table {border-collapse: collapse; border: solid 1px #999; width:100%}
		.table tr td, .table tr th {border:  solid 1px #999; padding: 3px; font-size: 12px}
		.rgt {text-align: right;}
		.ctr {text-align: center;}
		table tr td {vertical-align: top}
	</style>
</head>
<body>
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<b>LAPORAN</b><br><br>
		HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK<br>
		<?php echo strtoupper($this->config->item('nama_sekolah')); ?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table style="margin-left:10%; width: 70%">
			<tr>
				<td width="20%">Nama Sekolah</td>
				<td width="2%">:</td>
				<td width="50%"><?php echo strtoupper($this->config->item('nama_sekolah')); ?></td>
			</tr>
			<tr>
				<td>NIS/NSS/NDS</td>
				<td>:</td>
				<td>201021107027P</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>Jl. Raya Samarang No. 52, Kode Pos : 44151, <br>Telepon : (0262) 231 095</td>
			</tr>
			<tr>
				<td>Kelurahan</td>
				<td>:</td>
				<td>Rancabango</td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td>:</td>
				<td>Tarogong Kaler</td>
			</tr>
			<tr>
				<td>Kabupaten/Kota</td>
				<td>:</td>
				<td>Garut</td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td>:</td>
				<td>Jawa Barat</td>
			</tr>
			<!-- <tr>
				<td>Website</td>
				<td>:</td>
				<td></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td></td>
			</tr> -->
		</table>


		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</center>
	
</body>
</html>