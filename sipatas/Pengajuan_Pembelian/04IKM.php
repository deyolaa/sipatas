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
                        <li class="nav-item"><a class="nav-link" href="HomePage.html">Back</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="HomePage.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    
                    <h2 class="fw-bolder text-white">Form Indeks Kepuasan Masyarakat</h2>
                    <p class="lead mb-0 text-white">Demi meningkatkan kualitas pelayanan kami silahkan berikan kritikan dan saran anda pada kolom dibawah agar BPTU-HPT padang Mengatas selalu memberikan pelayanan yang terbaik bagi anda</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                      
                    <?php
                            include "../config.php";

                            if (isset($_POST['simpan'])) {
                                $nama_ikm = $_POST['nama_ikm'];
                                $instansi_ikm = $_POST['instansi_ikm'];
                                $nomor_ikm = $_POST['nomor_ikm'];
                                $kritik_ikm = $_POST['kritik_ikm'];
                                
                                

                                $sql1 = "INSERT INTO db_ikm (id_ikm, nama_ikm, instansi_ikm, nomor_ikm, kritik_ikm) VALUES (NULL,'$nama_ikm','$instansi_ikm','$nomor_ikm','$kritik_ikm')"; 

                                $result = mysqli_query($con,$sql1);

                                
                            }
        
                        ?>
                        <form action="" method="POST" class="parent" id="contactForm" >
                            <div class="form-grup">
                                <table >
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  name="nama_ikm"
                                                placeholder="instansi" required>
                                                <label for="floatingInput">Nama Anda</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Perwakilan" name="instansi_ikm" required>
                                                <label for="floatingInput">Nama Instansi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" placeholder="No Whatsapp" name="nomor_ikm"  required>
                                                <label for="floatingInput">No. Whatsapp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="kritik_ikm" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Kritik dan Saran</label>
                                            </div>
                  
    
                                </table>
                                <input type="submit"  class="btn btn-primary btn-lg " name="simpan" value="Simpan">
                            </div>
                        </form>



        <!-- NAVIGATION BAR END -->

        <!-- FOOTER -->

        <!-- FOOTER END -->
    </body>
</html>