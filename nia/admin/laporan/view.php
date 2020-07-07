<?php include "../../pages/coneksi/config.php";
if (!isset($_SESSION)) {
  session_start();
}
if (
  empty($_SESSION['username']) and
  empty($_SESSION['password'])
) {
  header('location:../../pages/login/login.php');
} else {

?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RIKY ASFAJRI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php include 'navbar.php';
      include 'sidebar.php'; ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DATA </h3> <br><br>
                  <a href='add.php' class='btn btn-primary'>TAMBAH DATA</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tanggal Laporan</th>
                        <th>No Akta</th>
                        <th>Tanggal Akta</th>
                        <th>Bentuk Pembuatan Hukum</th>
                        <th>Pehak Yang Memberikan</th>
                        <th>Pehak Yang Menerima</th>
                        <th>Jenis Dan No Hak</th>
                        <th>Letak Tanah Dan Bangunan</th>
                        <th>Luas Tanah (M2)</th>
                        <th>Luas Bangunan (M2)</th>
                        <th>Nilai HT / Harga Transaksi Perolehan / Pengalihan Hak</th>
                        <th>Nop Tahun</th>
                        <th>NJOP</th>
                        <th>Tanggal SSP</th>
                        <th>Rp</th>
                        <th>Tanggal SSB</th>
                        <th>Rp</th>
                        <th>Ketarangan</th>
                        <th width="100xp">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $queri = "SELECT * FROM laporan ";
                      $hasil = mysqli_query($koneksi, $queri);
                      $no = 1;
                      while ($kolom = mysqli_fetch_assoc($hasil)) {
                        $tgl_l = date("d-M-Y", strtotime($kolom['tgl_laporan']));
                        $tgl_a = date("d-M-Y", strtotime($kolom['tgl_akta']));
                      ?><tr>
                          <td><?php echo "$tgl_l"; ?></td>
                          <td><?php echo "$kolom[no_akta]"; ?></td>
                          <td><?php echo "$tgl_a"; ?></td>
                          <td><?php echo "$kolom[bentuk_hukum]"; ?></td>
                          <td><?php echo "$kolom[nama_penjual]"; ?></td>
                          <td><?php echo "$kolom[nama_pembeli]"; ?></td>
                          <td><?php echo "$kolom[no_sertifikat]"; ?></td>
                          <td><?php echo "$kolom[alamat_tanah]"; ?></td>
                          <td><?php echo "$kolom[luas_tanah]"; ?></td>
                          <td><?php echo "$kolom[luas_bangunan]"; ?></td>
                          <td><?php echo "$kolom[harga_peralihan_hak]"; ?></td>
                          <td><?php echo "$kolom[nop_tahun]"; ?></td>
                          <td><?php echo "$kolom[njop]"; ?></td>
                          <td><?php echo "$kolom[tgl_ssp]"; ?></td>
                          <td><?php echo "$kolom[h_ssp]"; ?></td>
                          <td><?php echo "$kolom[tgl_ssb]"; ?></td>
                          <td><?php echo "$kolom[h_ssb]"; ?></td>
                          <td><?php echo "$kolom[keterangan]"; ?></td>
                          <td><?php echo "<a href='hapus.php?id=$kolom[id_laporan]' onclick=\"return confirm('Apakah anda yakin akan menghapus :)\" class='btn btn-danger'>Hapus</a> <br><br>
                            <a href='edit.php?id=$kolom[id_laporan]' class='btn btn-primary'>Edit</a>"; ?></td>
                        </tr>
                      <?php
                        $no = $no + 1;
                      }
                      ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include '../footer.php'; ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
  </body>

  </html>
<?php }; ?>