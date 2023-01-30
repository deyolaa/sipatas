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
                        <li class="nav-item"><a class="nav-link" href="03DashboardTamu.php">Back</a></li>
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="../halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../halaman/Contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        <div class="container px-5 my-5 px-5">
            <div class="text-center ">
                    
                <h2 class="display-5 fw-bolder text-white mb-2">Form Pengajuan Kunjungan</h2>
                <p class="lead mb-0 text-white">Silahkan isi form pengajuan kunjungan, data anda akan diterima terlebih dahulu dan akan dibalas melalui surat balasan melalui email</p>

                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="container px-5 ">
                        <?php
                            include "../config.php";

                            if (isset($_POST['simpan'])) {
                                $email_kun = $_POST['email_kun'];
                                $instansi_kun = $_POST['instansi_kun'];
                                $nama_kun = $_POST['nama_kun'];
                                $whatsapp_kun = $_POST['nomor_kun'];
                                $tujuan_kun = $_POST['tujuan_kun'];
                                $tgl_kun = $_POST['tanggal_kun'];
                                $waktu_kun = $_POST['waktu_kun'];
                                $surat_kun = $_POST['surat_kun'];

                                $sql1 = "INSERT INTO kunjungan (id_pengajuan, email_kun, instansi_kun, nama_kun, whatsapp_kun, tujuan_kun, tgl_kun, waktu_kun, surat_kun) VALUES (NULL,'$email_kun','$instansi_kun','$nama_kun','$whatsapp_kun','$tujuan_kun','$tgl_kun','$waktu_kun','$surat_kun')"; 

                                $result = mysqli_query($con,$sql1);
                                if($result){
                                echo "<script>alert('Data Berhasil Disimpan, Terima kasih');window.location='03DashboardTamu.php';</script>";
                                } else {
                                echo mysqli_error($con);
                                }
                              

                                
                            }
        
                        ?>
                        <div class=" row gx-5 justify-content-center">
                            <div class="col-lg-6 text-center my-5">
                                <form action="" method="POST" class="parent" id="contactForm" >
                                    <div class="form-grup">
                                        <table >
                                            <div class="form-floating mb-3 ">
                                                <input type="email" class="form-control" placeholder="name@example.com" name="email_kun" required>
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  name="instansi_kun"
                                                placeholder="instansi" required>
                                                <label for="floatingInput">Nama Instansi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Perwakilan" name="nama_kun" required>
                                                <label for="floatingInput">Nama Perwakilan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" placeholder="No Whatsapp" name="nomor_kun" required>
                                                <label for="floatingInput">No. Whatsapp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="tujuan_kun" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Tujuan Kunjungan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control"  name="tanggal_kun" required>
                                                <label for="floatingInput">Tanggal Kunjungan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="time" class="form-control"  name="waktu_kun" required>
                                                <label for="floatingInput">Waktu Kunjungan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control"  name="surat_kun" required>
                                                <label for="floatingInput">Upload Surat</label>
                                            </div>
                                        </table>
                                        <input type="submit"  class="btn btn-primary btn-lg " name="simpan" value="Kirim">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>
    </body>
</html>