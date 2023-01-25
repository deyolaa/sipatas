<html>
    <head>
        <title>SIPATAS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="./css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
    </head>
    <body  style="background-color: white;">

        <!-- SIDEBAR -->
        <div id="wrapper">
            <ul class="navbar-nav bg-black sidebar sidebar-dark accordion">
                <a class="my-2 sidebar-brand d-flex align-items-center justify-content-center">
                    <img src="img/bptu.png" height="60px" /> 
                    
                </a>

                <hr class="mx-1 sidebar-divider d-none d-md-block">
    
                <!-- Heading -->
                <div class=" sidebar-heading">
                    Menu Admin
                </div>
                
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="02AMagang.php">
                        <i class="bi bi-house"></i>
                    <span>Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="02APermohonan.php">
                        <i class="bi bi-envelope"></i>
                    <span>Permohonan Magang</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="02AAbsen.php">
                        <i class="bi bi-book"></i>
                    <span>Absensi Magang</span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link" href="../loginAdmin.php">
                        <i class="bi bi-door-closed"></i>
                    <span>Logout</span></a>
                </li>

                
 
            </ul>
            <div id="content-wrapper" class="d-flex flex-column ">

                <!-- Main Content -->
                <div id="content" class="col-md-9  col-lg-10 px-md-4 mb-5">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="#">Absensi Peserta Magang BPTU HPT Padang Mengatas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
            
                    <!-- Table-->
                    <h5 class="text-black my-3">Logbook harian</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered text-black"  id="dataTable" width="100%" cellspacing="0">
                                
                                <tr>
                                    <th>Tanggal</th>
                                    <td>23/Maret/2023</td>
                                </tr>
                            
                                <tr>
                                    <th>Nama</th>
                                    <td>Deyola Fadwa Shifana</td>
                                </tr>
                            
                                <tr>
                                    <th>Asal Sekolah/Universitas</th>
                                    <td>Universitas Andalas</td>
                                </tr>

                                <tr>
                                    <th>Pembimbing Lapangan</th>
                                    <td>....</td>
                                </tr>

                                <tr>
                                    <th>Bidang (Hari ini)</th>
                                    <td>....</td>
                                </tr>

                                <tr>
                                    <th>Output</th>
                                    <td>....</td>
                                </tr>

                                <tr>
                                    <th>Bukti Foto</th>
                                    <td></td>
                                </tr>
                        </table>
                        <a type="button" href="02CTAbsen.html" class="btn btn-primary"><i class="bi bi-printer"></i>  Cetak Absen</a>
                </div>   
            </div> 
            </div>
    </body>
</html>