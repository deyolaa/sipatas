

<!DOCTYPE html>
<html lang="en">
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
                    <p class="lead text-white mb-4 ">Syarat Pendaftaran Magang : <br> Mengisi form dan mengirimkan surat tugas dari Sekolah/Kampus</Main></p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">

                    <?php
                        include "../config.php";
                        if (isset($_POST['kirim'])) {
                            $emailmg = $_POST['emailmg'];
                            $asalmg = $_POST['asalmg'];
                            $jurusanmg = $_POST['jurusanmg'];
                            $perwakilanmg = $_POST['perwakilanmg'];
                            $anggotamg = $_POST['anggotamg'];
                            $nomormg = $_POST['nomormg'];
                            $tujuanmg = $_POST['tujuanmg'];
                            $mulaimg = $_POST['mulaimg'];
                            $selesaimg = $_POST['selesaimg'];
                            $suratmg = $_POST['suratmg'];

                            $sql3 = "INSERT INTO `permohonan_magang`(`id_magang`, `emailmg`, `asalmg`, `jurusanmg`, `perwakilanmg`, `anggotamg`, `nomormg`, `tujuanmg`, `mulaimg`, `selesaimg`, `suratmg`) VALUES (NULL, '$emailmg','$asalmg','$jurusanmg','$perwakilanmg','$anggotamg','$nomormg','$tujuanmg','$mulaimg','$selesaimg','$suratmg')";
                            
                            $result = mysqli_query($con,$sql3);
                            if($result){
                                echo "<script>alert('Data Berhasil Dikirim, Terima kasih');window.location='02DashboardMagang.php';</script>";
                                } else {
                                echo mysqli_error($con);
                            }
                        }
                    ?>
                                <form action="" method="POST" class="parent" id="contactForm" enctype="multipart/form-data">
                                    <div class="form-grup text-center">
                                        <table >
                                            <div class="form-floating mb-3 ">
                                                <input type="email" class="form-control" placeholder="name@example.com" name="emailmg" required>
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="instansi" name="asalmg" required>
                                                <label for="floatingInput">Nama Sekolah/Universitas</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="jurusan" name="jurusanmg" required>
                                                <label for="floatingInput">Kejuruan/Jurusan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="wakil" name="perwakilanmg" required>
                                                <label for="floatingInput">Nama Perwakilan Kelompok Magang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="anggotamg" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Anggota Kelompok (jika ada)</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" placeholder="No Whatsapp" name="nomormg" required>
                                                <label for="floatingInput">No. Whatsapp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="tujuanmg" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Tujuan Magang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control"  name="mulaimg" required>
                                                <label for="floatingInput">Mulai Magang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control"  name="selesaimg" required>
                                                <label for="floatingInput">Selesai Magang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control"  name="suratmg" required>
                                                <label for="floatingInput">Upload Surat</label>
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


        <!-- NAVIGATION BAR END -->

        <!-- FOOTER -->

        <!-- FOOTER END -->
    </body>
</html>