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
                        <a href="index.php" title="">
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
        <?php
        $queri =mysqli_query($koneksi,"SELECT * FROM jenis_akta WHERE id_jenis_akta='$_GET[id]' ");
        $akta=mysqli_fetch_assoc($queri); ?>
        <!-- === BEGIN CONTENT === -->
        <div id="content">
            <div class="container background-white">
                <div class="row margin-vert-30">
                    <!-- Main Column -->
                    <div class="col-md-9">
                        <div class="blog-post">
                            <div class="blog-item-header">
                                <!-- Title -->
                                <h2>
                                    <a href="#">
                                        <?php echo "$akta[nama_akta]"; ?>
                                    </a>
                                </h2>
                                <!-- End Title -->
                            </div>
                            <!-- Blog Item -->
                            <div class="blog-item">
                                <div class="clearfix"></div>
                                <div class="blog-post-body row margin-top-15">
                                    <div class="col-md-12">
                                        <p><h3>SYARAT PENGAJUAN ONLINE</h3> <br>
                                            <ul>
                                            <?php 
                                            $qsyarat =mysqli_query($koneksi,"SELECT * FROM syarat WHERE jenis_akta='$_GET[id]' ");
                                            $rsyarat=mysqli_fetch_row($qsyarat);
                                            while ($syarat=mysqli_fetch_assoc($qsyarat)) {
                                              echo "<li>$syarat[syarat] </li>"  ;  
                                             } ?>
                                            </ul>
                                            
                                        </p> <br>
                                        <?php
                                        if (!empty($rsyarat)) {
                                             echo "<a href='pengajuan.php?id=$_GET[id]' type='button' class='btn btn-primary btn-lg' >Ajukan Permohonan</a>";
                                         } 
                                           ?>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Item -->
                        </div>
                        <!-- End Blog Post -->
                    </div>
                    <!-- End Main Column -->
                    <!-- Side Column -->
                    <div class="col-md-3">
                        <!-- Recent Posts -->
                        <div class="recent-posts">
                            <h3>Jenis-jenis Akta</h3>
                            <ul class="posts-list margin-top-10">
                                <?php 
                                    $qakta =mysqli_query($koneksi,"SELECT * FROM jenis_akta ");
                                    while ($jenis=mysqli_fetch_assoc($qakta)) {
                                      echo "<li>
                                      <div class='recent-post'>
                                        <a href='syarat.php?id=$jenis[id_jenis_akta]' class='posts-list-title'><h4>$jenis[nama_akta]</h4></a>
                                    </div>
                                    </li>"  ;  } ?>
                            </ul>

                        </div>
                        <!-- End Recent Posts -->
                        <!-- End Side Column -->
                    </div>
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