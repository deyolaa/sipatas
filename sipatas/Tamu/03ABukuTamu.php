<?php
    include "../config.php";
  
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>SIPATAS</title>
        <link href="../halaman/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="../halaman/css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
    </head>
    
    <body  style="background-color: white;">

        <!-- SIDEBAR -->
        <div id="wrapper">
            <ul class="navbar-nav bg-black sidebar sidebar-dark accordion">
                <a class="my-2 sidebar-brand d-flex align-items-center justify-content-center">
                    <img src="../halaman/img/bptu.png" height="60px" /> 
                    
                </a>

                <hr class="mx-1 sidebar-divider d-none d-md-block">
    
                <!-- Heading -->
                <div class=" sidebar-heading">
                    Menu Admin
                </div>
                
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="03ATamu.php">
                        <i class="bi bi-house"></i>
                    <span>Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="03APTamu.php">
                        <i class="bi bi-envelope"></i>
                    <span>Pengajuan</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="03ABukuTamu.php">
                        <i class="bi bi-book"></i>
                    <span>Buku Tamu</span></a>
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
                    <nav class="nnavbar navbar-expand-lg navbar-light bg-light my-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="02APermohonan.html">Buku Tamu BPTU HPT Padang Mengatas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                          <form class="form-inline my-2 mr-auto mx-5">
                            <input class="form-control mr-sm-2 me-2" type="search" placeholder="Search" aria-label="Search" >
                            <button class=" btn btn-outline-success" type="submit">Search</button>
                          </form>
                        </div>
                    </nav>
                

                <!-- Table-->
                <h5 class="text-black my-3">List Pengunjung</h5>
                <div class="table-responsive">
                        <table class="table table-sm"  id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th class="text-center">ID Pengunjung</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <?php
                            $sql1 = "SELECT * FROM tamu";
                            $result = mysqli_query($con, $sql1);
                            while ($row= mysqli_fetch_assoc($result)){
                        ?>

                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['id_tamu'];?></td>
                                <td><?php echo $row['nama_tamu'];?></td>
                                <td><?php echo $row['instansi_tamu'];?></td>
                                <td><?php echo $row['tgl_tamu'];?></td>
                                <td>
                                    <a type="button" class="btn btn-primary" style="background-color: blue;" href="03DetailBukuTamu.php"><i class="bi bi-info-lg"></i></a>
                                    <a type="button" class="btn btn-warning" style="background-color: #E15B29;" href="03EditBukuTamu.html"><i class="bi bi-pencil-square"></i></a>
                                    <a type="button" onclick="return confirm('Anda yakin menghapus data barang ini ?')" href=""class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                        
                                </td>
                            </tr>                
                        </tbody>
                        <?php

                            }
                        ?>
                    
                    </table>  
                    <a type="button" href="03CTBukuTamu.html" class="btn btn-primary"><i class="bi bi-printer"></i>  Cetak Laporan</a>
                </div> 
            </div> 
        </div>
        </div>                     
    </body>
</html>