<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>PPAT Riky Asfajri</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <div id="header" style="background-position: 50% 0%;
" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html" title="">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <!-- Top Menu -->
                <?php include 'menu.php'; ?>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content">
            <div class="container background-white">
                <div class="row margin-vert-30">
                    <!-- Register Box -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <?php 
                            $qakta =mysqli_query($koneksi,"SELECT * FROM jenis_akta WHERE id_jenis_akta='$_GET[id]' ");
                            $akta=mysqli_fetch_assoc($qakta);?>
                        <form class="signup-page margin-top-20" method="POST" action="pengajuan_proses.php" enctype="multipart/form-data">
                            <div class="signup-header">
                                <h2 class="margin-bottom-20">Pengajuan Permohonan</h2>
                                <p><?php echo "$akta[nama_akta]"; ?></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" hidden="">
                                    <label>Jenis Akta</label>
                                    <input class="form-control margin-bottom-20" type="text" name="akta" value="<?php echo "$akta[id_jenis_akta]"; ?>">
                                </div>
                            </div>
                            <label>Nama Pemohon</label>
                            <input class="form-control margin-bottom-20" type="text" name="nama">
                            <label>No HP</label>
                            <input class="form-control margin-bottom-20" type="text" name="hp">
                            <label>Alamat</label>
                            <input class="form-control margin-bottom-20" type="text" name="alamat">

                            <?php 
                                $qsyarat =mysqli_query($koneksi,"SELECT * FROM syarat WHERE jenis_akta='$_GET[id]' ");
                                $jml=mysqli_num_rows($qsyarat);
                                while ($syarat=mysqli_fetch_assoc($qsyarat)) { ?>
                                <div class="row">
                                    <div class="col-sm-2" hidden="" >
                                    <label><?php echo"$syarat[syarat]"; ?>
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="text" value="<?php echo"$syarat[id_syarat]"; ?>" name="sya[]">
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-sm-12">
                                    <label><?php echo"$syarat[syarat]"; ?>
                                        <span class="color-red">*</span>
                                    </label>
                                        <input class="form-control margin-bottom-20" type="file" name="gm[<?php echo"$syarat[id_syarat]"; ?>]">
                                    </div>
                                </div>
                                <?php } ?>
                                <input type="hidden" name="jml" value="<?php echo "$jml"; ?>">
                            
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Register Box -->
                </div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <?php include 'footer.php'; ?>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Stellar Parallax -->
            <script type="text/javascript" src="assets/js/jquery.stellar.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->