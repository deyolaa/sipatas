<html>
    <head>
        <title>SIPATAS</title>
        <link href="../halaman/css/styles.css" rel="stylesheet" />
    </head>
    <body background="../halaman/img/sipatasbg.png">
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <img src="../halaman/img/peternakan.png" height="60px" align="left"/> 
                <img src="../halaman/img/PKH.png" height="60px" align="left"/> 
                <img src="../halaman/img/bptu.png" height="60px" align="left"/>               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="03DashboardTamu.php">Back</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../halaman/Contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section >
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    
                    <h2 class="display-5 fw-bolder text-white mb-2">Buku Tamu</h2>
                    <p class="lead mb-0 text-white">Silahkan isi form dibawah sebagai tanda anda pernah berkunjung ke BPTU HPT Padang Mengatas</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    <?php
                            include "../config.php";

                            if (isset($_POST['simpan'])) {
                                $nama_tamu = $_POST['nama_tamu'];
                                $instansi_tamu = $_POST['instansi_tamu'];
                                $whatsapp_tamu = $_POST['whatsapp_tamu'];
                                $tgl_tamu = $_POST['tgl_tamu'];
                                $kritik_tamu = $_POST['kritik_tamu'];
                                

                                $sql1 = "INSERT INTO `tamu`(`id_tamu`, `nama_tamu`, `instansi_tamu`, `whatsapp_tamu`, `tgl_tamu`, `kritik_tamu`) VALUES ('','$nama_tamu','$instansi_tamu','$whatsapp_tamu','$tgl_tamu','$kritik_tamu')"; 

                                $result = mysqli_query($con,$sql1);

                                
                            }
        
                        ?>
                        <form action="" method="POST" class="parent" id="contactForm" >
                            <div class="form-grup">
                                <table >
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  name="nama_tamu"
                                                placeholder="instansi" required>
                                                <label for="floatingInput">Nama Anda</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Perwakilan" name="instansi_tamu" required>
                                                <label for="floatingInput">Nama Instansi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="No Whatsapp" name="whatsapp_tamu" required>
                                                <label for="floatingInput">No. Whatsapp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="kritik_tamu" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Kritik dan Saran</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control"  name="tgl_tamu" required>
                                                <label for="floatingInput">Tanggal Kunjungan</label>
                                            </div>
    
                                </table>
                                <input type="submit"  class="btn btn-primary btn-lg " name="simpan" value="Simpan">
                            </div>
                        </form>              
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>


        <!-- NAVIGATION BAR END -->

        <!-- FOOTER -->

        <!-- FOOTER END -->
    </body>
</html>