<?php include "../../pages/coneksi/config.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RIKY ASFAJRI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            <i class="fas fa-globe"></i> PPAT RIKY ASFAJRI. S.H.,M.Kom
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <table>
              <tr>
                <td>Nama PPAT</td>
                <td>:</td>
                <td>RIKY ASFAJRI. S.H.,M.Kom</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Jalan Raya Pekanbaru Bangkinang<br> KM. 16 Rimbo Panjang</td>
              </tr>
              <tr>
                <td>NPWP</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>Wilayah Kerja</td>
                <td>:</td>
                <td></td>
              </tr>
            </table>
          </address>
        </div>

        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Laporan Bulanan Pembuatan AKTA PPAT</strong><br>
          </address>
        </div>
        <!-- <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
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
              $queri = "SELECT * FROM laporan where   month(tgl_laporan)='$_GET[b]' AND year(tgl_laporan)='$_GET[t]'";
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
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-8">

        </div>
        <!-- /.col -->
        <div class="col-4">
          <address>
            <strong>
              Pekanbaru,<br>
              <br>
              <br>
              <br>
              <br>
              <br>
              RIKY ASFAJRI. S.H.,M.Kom
            </strong>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->

  <script type="text/javascript">
    window.addEventListener("load", window.print());
  </script>
</body>

</html>