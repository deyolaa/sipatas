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
                        <li class="nav-item"><a class="nav-link" href="../halaman/HomePage.php">Back</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../halaman/Contact.html">Contact</a></li>
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
                                $umur_ikm = $_POST['umur_ikm'];
                                $jeniskelamin_ikm=$_POST['jeniskelamin_ikm'];
                                $pendidikan_ikm=$_POST['pendidikan_ikm'];
                                $pekerjaan_ikm=$_POST['pekerjaan_ikm'];
                                $pertanyaan1=$_POST['pertanyaan1'];
                                $pertanyaan2=$_POST['pertanyaan2'];
                                $pertanyaan3=$_POST['pertanyaan3'];
                                $pertanyaan4=$_POST['pertanyaan4'];
                                $pertanyaan5=$_POST['pertanyaan5'];
                                $pertanyaan6=$_POST['pertanyaan6'];
                                $pertanyaan7=$_POST['pertanyaan7'];
                                $pertanyaan8=$_POST['pertanyaan8'];
                                $pertanyaan9=$_POST['pertanyaan9'];
                                $pertanyaan10=$_POST['pertanyaan10'];
                                $pertanyaan11=$_POST['pertanyaan11'];
                                $pertanyaan12=$_POST['pertanyaan12'];
                                $pertanyaan13=$_POST['pertanyaan13'];
                                $pertanyaan14=$_POST['pertanyaan14'];
                                $kritik_ikm = $_POST['kritik_ikm'];
                                
                                

                                $sql1 = "INSERT INTO db_ikm (id_ikm, nama_ikm, instansi_ikm, nomor_ikm, umur_ikm, jeniskelamin_ikm, pendidikan_ikm, pekerjaan_ikm, pertanyaan1, pertanyaan2, pertanyaan3, pertanyaan4, pertanyaan5, pertanyaan6, pertanyaan7, pertanyaan8, pertanyaan9, pertanyaan10, pertanyaan11, pertanyaan12, pertanyaan13, pertanyaan14, kritik_ikm)
                                         VALUES (NULL,'$nama_ikm','$instansi_ikm','$nomor_ikm','$umur_ikm','$jeniskelamin_ikm','$pendidikan_ikm','$pekerjaan_ikm','$pertanyaan1','$pertanyaan2','$pertanyaan3','$pertanyaan4','$pertanyaan5','$pertanyaan6','$pertanyaan7','$pertanyaan8','$pertanyaan9','$pertanyaan10','$pertanyaan11','$pertanyaan12','$pertanyaan13','$pertanyaan14','$kritik_ikm')"; 

                                $result = mysqli_query($con,$sql1);

                                
                            }
        
                        ?>
                        <form action="" method="POST" class="parent" id="contactForm" >
                            <div class="form-grup">
                                <table >
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  name="nama_ikm"
                                                placeholder="instansi" required>
                                                <label for="floatingInput">Nama Responden</label>
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
                                                <input type="number" class="form-control" placeholder="Umur" name="umur_ikm"  required>
                                                <label for="floatingInput">Umur</label>
                                            </div>

                                            <div class="text-white mb-3">
                                                 <b> Jenis Kelamin : </b><br>
                                                      <input type ="radio" name =jeniskelamin_ikm value = "Laki - Laki"> Laki - Laki <br>
                                                      <input type ="radio" name =jeniskelamin_ikm value = "Perempuan"> Perempuan <br>
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Pendidikan Terakhir : </b><br>
                                                      <input type ="radio" name =pendidikan_ikm value = "SD Kebawah"> SD Kebawah <br>
                                                     <input type ="radio" name =pendidikan_ikm value = "SLTP"> SLTP <br>
                                                     <input type ="radio" name =pendidikan_ikm value = "SLTA"> SLTA <br>
                                                     <input type ="radio" name =pendidikan_ikm value = "D1-D2-D3"> D1-D2-D3 <br>
                                                     <input type ="radio" name =pendidikan_ikm value = "S1"> S1 <br>
                                                     <input type ="radio" name =pendidikan_ikm value = "S2 Keatas"> S2 Keatas<br>
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Pekerjaan Utama : </b><br>
                                                      <input type ="radio" name =pekerjaan_ikm value = "PNS/TNI/POLRI"> PNS/TNI/POLRI <br>
                                                     <input type ="radio" name =pekerjaan_ikm value = "Pegawai Swasta"> Pegawai Swasta <br>
                                                     <input type ="radio" name =pekerjaan_ikm value = "Wiraswasta/Usahawan"> Wiraswasta/Usahawan <br>
                                                     <input type ="radio" name =pekerjaan_ikm value = "Pelajar/Mahasiswa"> Pelajar/Mahasiswa <br>
                                                     <input type ="radio" name =pekerjaan_ikm value = "Lainnya"> Lainnya <br>
                                            </div>  
                                            <div class="text-white mb-3 ">
                                                  <b> Bagaimana Pemahaman Saudara Tentang Kemudahan Pelayanan di BPTU-HPT Padang Mengatas : </b><br>
                                                      <input type ="radio" name =pertanyaan1 value = "Tidak Mudah"> Tidak Mudah <br>
                                                     <input type ="radio" name =pertanyaan1 value = "Kurang Mudah"> Kurang Mudah <br>
                                                     <input type ="radio" name =pertanyaan1 value = "Mudah"> Mudah <br>
                                                     <input type ="radio" name =pertanyaan1 value = "Sangat Mudah"> Sangat Mudah <br>
                                                   
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana Pendapat Saudara Tentang Kewajaran Persyaratan Teknis dan Administratif dalam Memperoleh Pelayanan : </b><br>
                                                      <input type ="radio" name =pertanyaan2 value = "Tidak Wajar"> Tidak Wajar <br>
                                                     <input type ="radio" name =pertanyaan2 value = "Kurang Wajar"> Kurang Wajar <br>
                                                     <input type ="radio" name =pertanyaan2 value = "Wajar"> Wajar<br>
                                                     <input type ="radio" name =pertanyaan2 value = "Sangat Wajar"> Sangat Wajar <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana Pendapat Saudara Tentang Jaminan Keberadaan dan Kepastian Pelaksana : </b><br>
                                                      <input type ="radio" name =pertanyaan3 value = "Tidak Terjamin"> Tidak Terjamin <br>
                                                     <input type ="radio" name =pertanyaan3 value = "Kurang Terjamin"> Kurang Terjamin <br>
                                                     <input type ="radio" name =pertanyaan3 value = "Terjamin"> Terjamin<br>
                                                     <input type ="radio" name =pertanyaan3 value = "Sangat Terjamin"> Sangat Terjamin <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana Pendapat Saudara Tentang Konsistensi Waktu Kerja Pelayanan (Kedisiplinan Pelaksana) : </b><br>
                                                      <input type ="radio" name =pertanyaan4 value = "Tidak Konsisten"> Tidak Konsisten <br>
                                                     <input type ="radio" name =pertanyaan4 value = "Kurang Konsisten"> Kurang Konsisten <br>
                                                     <input type ="radio" name =pertanyaan4 value = "Konsisten"> Konsisten<br>
                                                     <input type ="radio" name =pertanyaan4 value = "Sangat Wajar"> Wajar <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana Pendapat Saudara Tentang Kejelasan Tanggung Jawab Pelaksana Dalam Memberikan Pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan5 value = "Tidak Jelas"> Tidak Jelas <br>
                                                     <input type ="radio" name =pertanyaan5 value = "Kurang Jelas"> Kurang Jelas <br>
                                                     <input type ="radio" name =pertanyaan5 value = "Jelas"> Jelas<br>
                                                     <input type ="radio" name =pertanyaan5 value = "Sangat Jelas"> Sangat Jelas <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana Pendapat Saudara Tentang Kemampuan Pelaksana Dalam Memberikan Pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan6 value = "Tidak Mampu"> Tidak Mampu <br>
                                                     <input type ="radio" name =pertanyaan6 value = "Kurang Mampu"> Kurang Mampu <br>
                                                     <input type ="radio" name =pertanyaan6 value = "Mampu"> Mampu<br>
                                                     <input type ="radio" name =pertanyaan6 value = "Sangat Mampu"> Sangat Mampu <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana Pendapat Saudara Tentang Kecepatan Pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan7 value = "Tidak Cepat"> Tidak Cepat <br>
                                                     <input type ="radio" name =pertanyaan7 value = "Kurang Cepat"> Kurang Cepat <br>
                                                     <input type ="radio" name =pertanyaan7 value = "Cepat"> Cepat<br>
                                                     <input type ="radio" name =pertanyaan7 value = "Sangat Cepat"> Sangat Cepat <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang perlakuan pelaksana dalam memberikan pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan8 value = "Sangat Membedakan"> Sangat Membedakan <br>
                                                     <input type ="radio" name =pertanyaan8 value = "Membedakan"> Membedakan <br>
                                                     <input type ="radio" name =pertanyaan8 value = "Kadang Membedakan"> Kadang Membedakan<br>
                                                     <input type ="radio" name =pertanyaan8 value = "Tidak Membedakan"> Tidak Membedakan <br>
                                                     
                                            </div>  
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang kesopanan dan keramahan pelaksana dalam memberikan pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan9 value = "Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah <br>
                                                     <input type ="radio" name =pertanyaan9 value = "Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah <br>
                                                     <input type ="radio" name =pertanyaan9 value = "Sopan dan Ramah"> Sopan dan Ramah<br>
                                                     <input type ="radio" name =pertanyaan9 value = "Sangat Sopan dan Ramah"> Sangat Sopan dan Ramah <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang kewajaran biaya pelayanan : </b><br>
                                                      <input type ="radio" name =pertanyaan10 value = "Tidak Wajar"> Tidak Wajar<br>
                                                     <input type ="radio" name =pertanyaan10 value = "Kurang Wajar"> Kurang Wajar <br>
                                                     <input type ="radio" name =pertanyaan10 value = "Wajar"> Wajar<br>
                                                     <input type ="radio" name =pertanyaan10 value = "Sangat Wajar"> Sangat Wajar <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang kepastian biaya pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan11 value = "Tidak Pasti"> Tidak Pasti <br>
                                                     <input type ="radio" name =pertanyaan11 value = "Kurang Pasti"> Kurang Pasti<br>
                                                     <input type ="radio" name =pertanyaan11 value = "Pasti"> Pasti<br>
                                                     <input type ="radio" name =pertanyaan11 value = "Sangat Pasti"> Sangat Pasti <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang ketepatan waktu pemberian pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan12 value = "Tidak Tepat"> Tidak Tepat <br>
                                                     <input type ="radio" name =pertanyaan12 value = "Kurang Tepat"> Kurang Tepat<br>
                                                     <input type ="radio" name =pertanyaan12 value = "Tepat"> Tepat<br>
                                                     <input type ="radio" name =pertanyaan12 value = "Sangat Tepat"> Sangat Tepat <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang kenyamanan lingkungan pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan13 value = "Tidak Nyaman"> Tidak Nyaman <br>
                                                     <input type ="radio" name =pertanyaan13 value = "Kurang Nyaman"> Kurang Nyaman<br>
                                                     <input type ="radio" name =pertanyaan13 value = "Nyaman"> Nyaman<br>
                                                     <input type ="radio" name =pertanyaan13 value = "Sangat Nyaman"> Sangat Nyaman <br>
                                                     
                                            </div>  
                                            <div class="text-white mb-3">
                                                  <b> Bagaimana pendapat Saudara tentang keamanan pelayanan: </b><br>
                                                      <input type ="radio" name =pertanyaan14 value = "Tidak Aman"> Tidak Aman <br>
                                                     <input type ="radio" name =pertanyaan14 value = "Kurang Aman"> Kurang Aman<br>
                                                     <input type ="radio" name =pertanyaan14 value = "Aman"> Aman<br>
                                                     <input type ="radio" name =pertanyaan14 value = "Sangat Aman"> Sangat Aman <br>
                                                     
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