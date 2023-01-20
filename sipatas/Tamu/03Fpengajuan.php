<?php
    include "../config.php";

    if (isset ($_POST ['submit'])){
        $email_kun = $_POST ['email_kun'];
        $instansi_kun = $_POST ['instansi_kun'];
        $nama_kun = $_POST ['nama_kun'];
        $whatsapp_kun = $_POST ['nomor_kun'];
        $tujuan_kun = $_POST ['tujuan_kun'];
        $tgl_kun = $_POST ['tanggal_kun'];
        $waktu_kun = $_POST ['waktu_kun'];
        $surat_kun = $_POST ['surat_kun'];
        
        $sql = "INSERT INTO `kunjungan`(id_pengajuan, email_kun, `instansi_kun`, `nama_kun`, `whatsapp_kun`, `tujuan_kun`, `tgl_kun`, `waktu_kun`, `surat_kun`) VALUES (NULL,'$email_kun','$instansi_kun','$nama_kun','$whatsapp_kun','$tujuan_kun','$tgl_kun','$waktu_kun','$surat_kun')"; 

        $result = mysqli_query($con,$sql);

        if($result){
            header("Location: 03DashboardTamu.php?msg=SUKSES");
        }
        else{
            echo " Failed : " . mysqli_error($con);
        }


    }
?>

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
                    
                    <h2 class="display-5 fw-bolder text-white mb-2">Form Pengajuan Kunjungan</h2>
                    <p class="lead mb-0 text-white">Silahkan isi form pengajuan kunjungan, data anda akan diterima terlebih dahulu dan akan dibalas melalui surat balasan lewat email</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <form >
                          
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email_kun" id="email" type="email" placeholder="name@example.com" />
                                <label for="email">Email</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" name="instansi_kun" id="instansi_kun" type="text" placeholder="nama" />
                                <label for="name">Nama Instansi</label>
                                
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama_kun" id="nama_kun" type="text" placeholder="perwakilan"/>
                                <label for="name">Nama Perwakilan Instansi</label>
                                
                            </div>
                    
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nomor_kun" id="nomor_kun" type="text" placeholder="nomor" />
                                <label for="phone">No Whatsapp</label>
                                
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="tujuan_kun" id="tujuan_kun" type="text"  style="height: 10rem" placeholder="tujuan" />
                                <label for="message">Tujuan Kunjungan</label>
                                
                            </div>
                            <div>
                                <label class="text-white mb-3"  >Tanggal Kunjungan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="date" class="tglmulai" name="tanggal_kun" id="tanggal_kun"  />
                                
                            </div>
                            <div>
                                <label class="text-white mb-3" >Waktu Kunjungan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="time" class="waktumulai" name="waktu_kun" id="waktu_kun"  />
                               
                            </div>
                            <div class="text-white" >
                                <form class="mb-3"name="surat_kun" >
                                    <p>Upload surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='file' name='surat_kun' /></p>
                                </form>
                            </div>

                            <div lass="d-grid">
                                <button class="btn btn-primary btn-lg"  name="submit" id="submit" value="submit" type="submit">Submit</button>
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