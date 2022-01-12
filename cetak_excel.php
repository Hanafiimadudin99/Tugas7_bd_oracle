<!DOCTYPE html>
<html>
<head>
  <?php 
  include'../fungsi/fungsi_rupiah.php';
  include'../fungsi/fungsi_indotgl.php';

 header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DataPenjualanBeras.xls");
  ?>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan Kelapa</h3>
            </div>
             
          <div class="#">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="#">
              <table>
                <thead>
                <tr>
                  <th>No</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pembeli </th>
            <th>Jenis Kelapa</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th> 
            <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
          <?php 
          include "../admin/koneksi.php";
          $no = 1;
          $total_semua = 0;
          $stid = oci_parse($koneksi, 'SELECT pembeli.*, kelapa.*, transaksi.* FROM transaksi 
transaksi INNER JOIN pembeli pembeli ON transaksi.id_pembeli = pembeli.id_pembeli 
INNER JOIN kelapa kelapa ON transaksi.id_kelapa = kelapa.id_kelapa ORDER BY transaksi.id_tran ASC');

          oci_execute($stid);

          while (($row = oci_fetch_array ($stid, OCI_BOTH)) != false) {
          $total = $row["HARGA_KELAPA"] * $row["JUMLAH"];
          $total_semua += $total; 
            
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= tgl_indo($row['TANGGAL_TRAN']); ?></td>
              <td><?= $row['NAMA_PEMBELI']; ?></td>
              <td><?= $row['JENIS_KELAPA']; ?></td> 
              <td><?= rupiah($row['HARGA_KELAPA']); ?></td> 
              <td><?= $row['JUMLAH']; ?></td> 
              <td><?= rupiah($total); ?></td> 
              
            </tr>
            </thead>              
            </tbody>
           <?php 
            }
          ?>

              </table>
              <br>
              <br>
              <div class="card-body">
                 <center>Bekasi, <?php echo tgl_indo($hari_ini); ?></center>
              <b><center>Manager Perusahaan</center></b>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <b><center>Budi S.Pd</center></b>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

</body>
</html>
