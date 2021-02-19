
<?php
include "koneksi.php";
include "header.php";

?>
<h1><center> DAFTAR BARANG </center></h1>

		<table class="table table-striped table-dark table-success"border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Kategori</td>
		<td>Satuan</td>
	</tr>
	<?php
		$no=1;
		$query = "SELECT * FROM barang1 
		INNER JOIN satuan1 on barang1.satuan_id = satuan1.id_satuan
		";
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
		
	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?=$data['nama_barang']?></td>
		<td><?=$data['ketegori_id']?></td>
		<td><?=$data['nama_satuan']?></td>
	</tr>
	<?php }?>

</table>
<input type='button'value='Tambah Barang'onClick='top.location="input_barang.php"'class='btn btn-success btn-sm'><?php include "footer.php";
