<?php
include "koneksi.php";
include "header.php"

?>
<h1><center> DAFTAR SATUAN </center></h1>

<table class="table table-striped table-dark table-success"border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Keterangan</td>
		
	</tr>
	<?php
		$no=1;
		$query = "SELECT * FROM satuan1
		";
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
		
	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?=$data['nama_satuan']?></td>
		<td>Sedang Digunakan</td>
	</tr>
	<?php }?>

</table>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-success btn-sm'>
	<?php
include "header.php";