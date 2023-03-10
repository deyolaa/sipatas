<?php
  include "../config.php";

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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../halaman/Contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div >
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Kunjungan Kerja</h1>
                            <p class="lead mb-4 text-white">Sistem yang memberikan informasi terkait dengan kunjungan eduwisata dari pelajar, mahasiswa, dan masyarakat yang ingin melakukan edukasi dibidang perternakan sapi potong dan hijauan pakan ternak. Adapun jadwal pelayanan di BPTU HPT Padang Mengatas bisa dilihat di tabel berikut.</p>
                            <?php
                              $data_tamu = mysqli_query($con,"SELECT * FROM tamu");
                              $jumlah_tamu = mysqli_num_rows($data_tamu);
                            ?>
                            <p class="lead mb-4 text-white">Jumlah tamu yang telah berkunjung : <b><?php echo $jumlah_tamu; ?> Orang</b></p>

                            <style>
                                table, th, td {
                                  border:1px solid rgb(255, 255, 255);
                                }
                                </style>
                            <table style="width:100%" class="text-white text-center">
                                <tr style="background-color: blue;">
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    
                                  </tr>
                                  <tr style="background-color: green;">
                                    <td>Senin</td>
                                    <td>8.00-12.00 , 13.00-16.00</td>
                                    
                                    
                                  </tr>
                                  <tr style="background-color: green;">
                                    <td>Selasa</td>
                                    <td>8.00-12.00 , 13.00-16.00</td>
                                    
                                  </tr>
                                  <tr style="background-color: green;">
                                    <td>Rabu</td>
                                    <td>8.00-12.00 , 13.00-16.00</td>
                                    
                                  </tr>
                                  <tr style="background-color: green;">
                                    <td>Kamis</td>
                                    <td>8.00-12.00 , 13.00-16.00</td>
                                    
                                  </tr>
                                  <tr style="background-color: green;">
                                    <td>Jumat</td>
                                    <td>8.00-12.00 , 13.30-16.00</td>
                                    
                                  </tr>
                                  <tr style="background-color: red;">
                                    <td>Sabtu dan Minggu</td>
                                    <td>Tutup</td>
                                    
                                  </tr>
                                  <tr style="background-color: red">
                                    <td>Hari Libur Nasional</td>
                                    <td>Tutup</td>
                                    
                                  </tr>
                            </table>

                            <div class="my-5 d-grid gap-4 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-outline-light btn-lg px-4" href="03Fpengajuan.php">Pengajuan Kunjungan</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="03BukuTamu.php">Buku Tamu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>
    </body>
</html>