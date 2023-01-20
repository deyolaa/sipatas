<html>
    <head>
        <title>SIPATAS</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<?php
    include "../config.php";

    session_start();

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

        $sql = "SELECT * FROM permohonan_magang WHERE emailmg='$emailmg'";
            $result = pg_query($con, $sql);
            if (pg_num_rows($result) > 0) {
                ?>
                 <div class="alert alert-danger alert-dismissible fade show">
                     <a href="" onClick="self.close()">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                     </a>
                     <strong>Kategori telah ada</strong>
                 </div>
                 <?php
            }else{
                //proses simpan
                    $sql1 = "INSERT INTO kategori (kode_kategori, nama_kategori) 
                            VALUES ('$kode_kategori','$nama_kategori')";
                    $result = pg_query($conn, $sql1);
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                    <a href="" onClick="self.close()">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                     </a>
                     <strong>Kategori berhasil ditambahkan</strong>
                 </div>
                 <?php
            }

    }

 ?>



    <body background="img/sipatasbg.png">
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <img src="img/bptu.png" height="60px" align="left"/>               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="02DashboardMagang.html">Back</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="HomePage.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Contact.html">Contact</a></li>

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
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama Sekolah/Universitas</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Kejuruan/Jurusan</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama Ketua Kelompok Magang</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Nama Semua Anggota Kelompok *(jika ada) </label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
            
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">No Whatsapp</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Tujuan Magang</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>

                            <!-- Tanggal masuk dan keluar-->
                            <div>
                                <label class="text-white mb-3" for="tglmulai">Tanggal Mulai Magang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="date" class="tglmulai" id="tglmulai" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required. /div>
                            </div>
                            <div>
                                <label class="text-white mb-3" for="tglselesai">Tanggal Selesai Magang &nbsp;&nbsp;&nbsp;</label>
                                <input type="date" class="tglselesai" id="tglselesai" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required. /div>
                            </div>

                            <!-- input surat -->
                            <div class="text-white" >
                                <form class="mb-3" action="proses.php" method="post" enctype="multipart/form-data">
                                    <p>Upload Surat Permohonan <input type='file' name='file' /></p>
                                </form>
                            </div>

                            <!-- Submit success message-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit" value="kirim">Submit</button></div>
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