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
                        <li class="nav-item"><a class="nav-link" href="01DashboardPengPembelian.php">Back</a></li>
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="../halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../halaman/Contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    
                    <h2 class="display-5 fw-bolder text-white mb-2">Form Pengajuan Pembelian Sapi</h2>
                    <p class="lead mb-0 text-white">Silahkan isi form ini dengan Data yang benar</p>
              
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="container px-5">
                        

                    <?php
                            include "../config.php";

                            if (isset($_POST['kirim'])) {
                                $email_pengajuan = $_POST['email_pengajuan'];
                                $instansi_pengajuan = $_POST['instansi_pengajuan'];
                                $nama_pengajuan = $_POST['nama_pengajuan'];
                                $nomor_pengajuan = $_POST['nomor_pengajuan'];
                                $sapi_pengajuan = $_POST['sapi_pengajuan'];
                                $jumlah_pengajuan = $_POST['jumlah_pengajuan'];
                                $alasan_pengajuan = $_POST['alasan_pengajuan'];
                                $surat_pengajuan = $_POST['surat_pengajuan'];

                                $sql1 = "INSERT INTO pengajuan_sapi (id_pengajuan, email_pengajuan, instansi_pengajuan, nama_pengajuan, nomor_pengajuan, sapi_pengajuan, jumlah_pengajuan, alasan_pengajuan, surat_pengajuan) VALUES (NULL,'$email_pengajuan','$instansi_pengajuan','$nama_pengajuan','$nomor_pengajuan','$sapi_pengajuan','$jumlah_pengajuan','$alasan_pengajuan','$surat_pengajuan')"; 

                                $result = mysqli_query($con,$sql1);

                                
                            }
        
                        ?>





                    <div class=" row gx-5 justify-content-center">
                            <div class="col-lg-6 text-center ">
                                <form action="" method="POST" class="parent" id="contactForm" >
                                    <div class="form-grup">
                                        <table >
                                            <div class="form-floating mb-3 ">
                                                <input type="email" class="form-control" placeholder="name@example.com" name="email_pengajuan" required>
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control"  name="instansi_pengajuan"
                                                placeholder="instansi" required>
                                                <label for="floatingInput">Nama Instansi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Perwakilan" name="nama_pengajuan" required>
                                                <label for="floatingInput">Nama Perwakilan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" placeholder="No Telpon/Whatsapp" name="nomor_pengajuan" required>
                                                <label for="floatingInput">No. Telpon / Whatsapp</label>
                                            </div>

                                            <div class="mb-3">
                                <label class="text-white" for="Jenis Sapi">Jenis Sapi</label>
                                <select name="sapi_pengajuan">
                                    <option value="">Silahkan Pilih Jenis Sapi yg anda Inginkan</option>
                                   <optgroup label="Simmental Jantan">
                                         <option value="Simmental Jantan Calon Bibit 3-6 Bulan">Simmental Jantan Calon Bibit 3-6 Bulan</option>
                                         <option value="Simmental Jantan Calon Bibit >6-9 Bulan">Simmental Jantan Calon Bibit >6-9 Bulan</option>
                                         <option value="Simmental Jantan Calon Bibit >9-12 Bulan">Simmental Jantan Calon Bibit>9-12 Bulan</option>
                                         <option value="Simmental Jantan Calon Bibit >12-18 Bulan">Simmental Jantan Calon Bibit >12-18 Bulan</option>
                                         <option value="Simmental Jantan Bibit >18-24 Bulan">Simmental Jantan Bibit >18-24 Bulan</option>
                                         <option value="Simmental Jantan Bibit >24-36 Bulan">Simmental Jantan Bibit >24-36 Bulan</option>
                                         <option value="Simmental Jantan Bibit >=36 Bulan">Simmental Jantan Bibit >36 Bulan</option>
                                   </optgroup>
                                        
                                   <optgroup label="Simmental Betina">
                                        <option value="Simmental Betina Calon Bibit >6-9 Bulan">Simmental Betina Calon Bibit >6-9 Bulan</option>
                                        <option value="Simmental Betina Calon Bibit >9-12 Bulan">Simmental Betina Calon Bibit>9-12 Bulan</option>
                                        <option value="Simmental Betina Calon Bibit >12-18 Bulan">Simmental Betina Calon Bibit >12-18 Bulan</option>
                                        <option value="Simmental Betina Calon Bibit >18-24 Bulan">Simmental Betina Calon Bibit >18-24 Bulan</option>
                                        <option value="Simmental Betina Bibit >24 Bulan">Simmental Betina Bibit >24 Bulan</option>
                                   </optgroup>
                                   
                                  <optgroup label="Limousin Jantan">
                                        <option value="Limousin Jantan Calon Bibit 3-6 Bulan">Limousin Jantan Calon Bibit 3-6 Bulan</option>
                                        <option value="Limousin Jantan Calon Bibit >6-9 Bulan">Limousin Jantan Calon Bibit >6-9 Bulan</option>
                                        <option value="Limousin Jantan Calon Bibit >9-12 Bulan">Limousin Jantan Calon Bibit>9-12 Bulan</option>
                                        <option value="Limousin Jantan Calon Bibit >12-18 Bulan">Limousin Jantan Calon Bibit >12-18 Bulan</option>
                                        <option value="Limousin Jantan Bibit >18-24 Bulan">Limousin Jantan Bibit >18-24 Bulan</option>
                                        <option value="Limousin Jantan Bibit >24-36 Bulan">Limousin Jantan Bibit >24-36 Bulan</option>
                                        <option value="Limousin Jantan Bibit >=36 Bulan">Limousin Jantan Bibit >36 Bulan</option>
                                 </optgroup>
                               
                                <optgroup label="Limousin Betina">
                               
                                          <option value="Limousin Betina Calon Bibit >6-9 Bulan">Limousin Betina Calon Bibit >6-9 Bulan</option>
                                          <option value="Limousin Betina Calon Bibit >9-12 Bulan">Limousin Betina Calon Bibit>9-12 Bulan</option>
                                          <option value="Limousin Betina Calon Bibit >12-18 Bulan">Limousin Betina Calon Bibit >12-18 Bulan</option>
                                          <option value="Limousin Betina Calon Bibit >18-24 Bulan">Limousin Betina Calon Bibit >18-24 Bulan</option>
                                          <option value="Limousin Betina Bibit >24 Bulan">Limousin Betina Bibit >24 Bulan</option>

                                 </optgroup>

                                 <optgroup label="Pesisir Jantan">
                                    <option value="Pesisir Jantan Calon Bibit 3-6 Bulan">Pesisir Jantan Calon Bibit 3-6 Bulan</option>
                                    <option value="Pesisir Jantan Calon Bibit >6-9 Bulan">Pesisir Jantan Calon Bibit >6-9 Bulan</option>
                                    <option value="Pesisir Jantan Calon Bibit >9-12 Bulan">Pesisir Jantan Calon Bibit>9-12 Bulan</option>
                                    <option value="Pesisir Jantan Calon Bibit >12-18 Bulan">Pesisir Jantan Calon Bibit >12-18 Bulan</option>
                                    <option value="Pesisir Jantan Bibit >18-24 Bulan">Pesisir Jantan Bibit >18-24 Bulan</option>
                                    <option value="Pesisir Jantan Bibit >24-36 Bulan">Pesisir Jantan Bibit >24-36 Bulan</option>
                                    <option value="Pesisir Jantan Bibit >=36 Bulan">Pesisir Jantan Bibit >=36 Bulan</option>
                                 </optgroup>
                           
                                 <optgroup label="Pesisir Betina">
                           
                                      <option value="Pesisir Betina Calon Bibit >6-9 Bulan">Pesisir Betina Calon Bibit >6-9 Bulan</option>
                                      <option value="Pesisir Betina Calon Bibit >9-12 Bulan">Pesisir Betina Calon Bibit>9-12 Bulan</option>
                                      <option value="Pesisir Betina Calon Bibit >12-18 Bulan">Pesisir Betina Calon Bibit >12-18 Bulan</option>
                                      <option value="Pesisir Betina Calon Bibit >18-24 Bulan">Pesisir Betina Calon Bibit >18-24 Bulan</option>
                                      <option value="Pesisir Betina Bibit >24 Bulan">Pesisir Betina Bibit >24 Bulan</option>

                             </optgroup>
                                </select>
                            </div>


                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="jumlah_pengajuan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Jumlah pengajuan (mis: 2 ekor, 3 ekor dll)</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="alasan_pengajuan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Alasan Pengajuan</label>
                                            </div>
                                          
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control"  name="surat_pengajuan" required>
                                                <label for="floatingInput">Upload Surat</label>
                                            </div>
                                        </table>
                                        <input type="submit"  class="btn btn-primary btn-lg " name="kirim" value="Kirim">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>
                           


        
    </body>
</html>