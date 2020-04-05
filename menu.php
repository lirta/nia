<div id="hornav" class="row text-light">
                    <div class="col-md-12">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.php" class="fa-home active">Home</a>
                                </li>
                                <li>
                                    <a href="profile.php" class="fa-gears ">Profile</a>
                                </li>
                                <li>
                                    <span class="fa-copy ">Syarat-syarat</span>
                                    <ul>
                                         <?php 
                                         include 'assets/coneksi/config.php';
                                            $hasila =mysqli_query($koneksi,"SELECT * FROM jenis_akta ");
                                            while ($menu=mysqli_fetch_assoc($hasila)) {
                                              echo "<li>
                                                        <a href='syarat.php?id=$menu[id_jenis_akta]'>$menu[nama_akta]</a>
                                                    </li>"  ;  
                                             } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.php" class="fa-comment ">Contact</a>
                                </li>
                                <li>
                                    <a href="nia/index.php" class="fa-sign-in ">Log In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>