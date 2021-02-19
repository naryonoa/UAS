   
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Daftar Barang</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tampil_barang.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Daftar Pelanggan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tampil_pelanggan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Daftar Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tampil_transaksi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Laporan Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="laporan_transaksi">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabel Transaksi
                            </div>
                            <?php
include "koneksi.php";


?>
<h2><center> DAFTAR TRANSAKSI </center></h2>

<table class="table table-striped table-dark table-success"border="1">
    <tr>
        <td>No</td>
        <td>Nama Transaksi</td>
        <td>Tanggal Transaksi</td>
        <td>Pelanggan</td>
        <td>Barang</td>
        <td>Harga</td>
        <td>Kuantitas</td>
        <td>Diskon</td>
    </tr>
    <?php
        $no=1;
        $query = "SELECT * FROM transaksi 
        INNER JOIN barang1 ON transaksi.id_barang = barang1.id_barang

        ";
        $sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
        while ($data = mysqli_fetch_array($sql_brg)) {
        
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?=$data['nama_transaksi']?></td>
        <td><?=$data['tgl_transaksi']?></td>
        <td><?=$data['id_pelanggan']?></td>
        <td><?=$data['nama_barang']?></td>
        <td>Rp.<?=$data['harga']?></td>
        <td><?=$data['qty']?></td>
        <td><?=$data['diskon']?>%</td>
    </tr>
    <?php }?>

</table>
</form>
                               