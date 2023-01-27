<html>
    <head>
        <title>SIPATAS</title>
        <link href="../halaman/css/styles.css" rel="stylesheet" />
    </head>
    <body background="../halaman/img/sipatasbg.png">
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <img src="../halaman/img/bptu.png" height="60px" align="left"/>               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="02DashboardMagang.php">Back</a></li>
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="../halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../halaman/Contact.html">Contact</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <section >
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    
                    <h2 class="display-5 fw-bolder text-white mb-2">Form Pendaftaran Magang</h2>
                    <p class="lead text-white-50 mb-4">Silahkan daftarkan diri anda dan jangan lupa untuk melihat persyaratan magang di BPTU HPT Padang Mengatas pada halaman sebelumnya</Main></p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">

                    <?php
                        include "../config.php";

                        if (isset($_POST['kirim'])) {
                            $id_magang = $_POST['id_magang'];
                            $tglabs = $_POST['tglabs'];
                            $namaabs = $_POST['namaabs'];
                            $asalabs = $_POST['asalabs'];
                            $pembimbingabs = $_POST['pembimbingabs'];
                            $bidangabs = $_POST['bidangabs'];
                            $outputabs = $_POST['outputabs'];
                            $buktiabs = $_POST['buktiabs'];

                            $sql3 = "INSERT INTO `absenmg`(`id_magang`, `tglabs`, `namaabs`, `asalabs`, `pembimbingabs`, `bidangabs`, `outputabs`, `buktiabs`) VALUES ('$id_magang','$tglabs','$namaabs','$asalabs','$pembimbingabs','$bidangabs','$outputabs','$buktiabs')";
                            
                            $result = mysqli_query($con,$sql3);
                        }

                    ?>

                        <form action="" method="POST" class="parent" id="contactForm" >
                                    <div class="form-grup">
                                        <table >
                                        <div class="form-floating mb-3">
                                                <input type="number" class="form-control"  name="id_magang"
                                                placeholder="id" required>
                                                <label for="floatingInput">Id Magang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control"  name="tglabs" required>
                                                <label for="floatingInput">Tanggal</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  name="namaabs"
                                                placeholder="nama" required>
                                                <label for="floatingInput">Nama</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="asal" name="asalabs" required>
                                                <label for="floatingInput">Sekolah/Universitas</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="pembimbing" name="pembimbingabs" required>
                                                <label for="floatingInput">Nama Pembimbing</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="bidangabs" placeholder="bidang" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Bidang hari ini</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="outputabs" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Output</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control"  name="buktiabs" required>
                                                <label for="floatingInput">Upload Foto menggunakan open camera</label>
                                            </div>
                                        </table>
                                        <input type="submit"  class="btn btn-primary btn-lg " name="kirim" value="Simpan">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <footer>
                    <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
                </footer>
    </body>
</html>