<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama_pelanggan=$_POST['nama_pelanggan'];
	$no_telpon=$_POST['no_telpon'];
	$status=$_POST['status'];
$query=mysqli_query($koneksi,"insert into pelanggan(nama_pelanggan, no_telpon, status)
value ('$nama_pelanggan','$no_telpon','$status')");
if($query){
	header("location:tampil_pelanggan.php");
}else{
	echo mysqli_error($koneksi);
}
};
include "header.php"
?>
<h1><center> TAMBAHKAN DATA PELANGGAN </center></h1>
<form method ="POST">
<table border="1" class="table table-bordered">
	<tr>
		<td>Nama Pelanggan</td>
		<td>Nomor Telpon</td>
		<td>Setatus Pelanggan</td>
	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_pelanggan"></td>
		<td><input class="form-control" type="number" name="no_telpon"></td>
		<td><select class="form-control" name="status">
			<option value="">-----Pilih-----</option>
			<option value="Member">Member</option>
			<option value="Non">Non Member</option>
	<Td>
		<button><input type="submit" class="btn btn-danger"name="Save" value="Simpan"></button>
	</Td>

	</tr>

</table>
</form>
<?php include "footer.php";