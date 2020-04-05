<?php include "../../pages/coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    { header('location:../../pages/login/login.php');}
    else {
     
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
  <?php include 'navbar.php'; include 'sidebar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <?php 
      $hasil =mysqli_query($koneksi,"SELECT * FROM permohonan inner join jenis_akta on permohonan.jenis_akta=jenis_akta.id_jenis_akta WHERE id_permohonan='$_GET[id]' ");
      $per=mysqli_fetch_assoc($hasil);
          ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">SYARAT <?php echo "$per[nama_akta]"; ?> </h3> <br>
              <h3 class="card-title">PEMOHON <?php echo "$per[nama]"; ?> </h3> <br>
              <?php echo "<a href='view.php' class='btn btn-success'>KEMBALI</a>";  ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Syarat</th>
                  <th>File</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $qsyarat =mysqli_query($koneksi,"SELECT * FROM syarat WHERE jenis_akta='$per[jenis_akta]'");
                $no = 1;
                while ($kolom=mysqli_fetch_assoc($qsyarat)) {
                  $qfile =mysqli_query($koneksi,"SELECT * FROM file_permohonan  WHERE id_permohonan='$_GET[id]' AND nama_file='$kolom[id_syarat]' ");
                  $file=mysqli_fetch_assoc($qfile);
                    ?><tr>
                        <td><?php echo "$no"; ?></td>
                        <td><?php echo "$kolom[syarat]"; ?></td>
                        <?php 
                        if (!empty($file)) { ?>
                        <td><img src="<?php echo "../../../assets/file/$file[file]"; ?>" width="500xp"></td>
                        <?php }else{ ?>
                        <td><?php echo "BERKAS KOSONG"; ?></td>
                        <?php }  ?>
                    </tr>
                    <?php $no=$no+1; } ?>
                
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
  $(function () {
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
<?php } ;?>