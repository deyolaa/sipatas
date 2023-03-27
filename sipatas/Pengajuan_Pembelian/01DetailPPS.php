<?php
    include "../config.php";
    $id_pengajuan = $_GET['id_pengajuan'];
?>
<html>
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
                    <a class="nav-link" href="01APengSapi.php">
                        <i class="bi bi-house"></i>
                    <span>Beranda</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="01AListPPS.php">
                        <i class="bi bi-envelope"></i>
                    <span>Pengajuan</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="01listIkm.php">
                        <i class="bi bi-book"></i>
                    <span>List IKM</span></a>
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
                <div id="content" class="mx-4">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light my-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="#">Pengajuan Pembelian Sapi BPTU HPT Patas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
            
                    <?php
                        $sql1 = "SELECT * FROM pengajuan_sapi WHERE id_pengajuan = '$id_pengajuan'" ;
                        $result = $con->query($sql1);
                        while ($row= mysqli_fetch_assoc($result)){
                    ?>
                    <h5 class="text-black my-3">Detail Pengajuan <?php echo $row['instansi_pengajuan']?></h5>
                    <a type="button" class="btn btn-primary mb-3 mx-3" style="background-color: green;" onclick="location.href='https://api.whatsapp.com/send?phone=<?php echo $row['nomor_pengajuan'];?>';"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                    <table class="table text-black table-sm table-bordered mx-3"  id="dataTable" width="100%" cellspacing="0">
                    
                                <tr>   
                                    <th>ID</th>
                                    <td><?php echo $row['id_pengajuan']?></td>
                                    </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $row['email_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Instansi</th>
                                    <td><?php echo $row['instansi_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Nama Perwakilan</th>
                                    <td><?php echo $row['nama_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                    <th>No. Telepon</th>
                                    <td><?php echo $row['nomor_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Jenis Sapi</th>
                                    <td><?php echo $row['sapi_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <td><?php echo $row['jumlah_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Alasan Pembelian</th>
                                    <td><?php echo $row['alasan_pengajuan']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Surat </th>
                                    <td><?php echo $row['surat_pengajuan']; ?></td>
                                    </tr>
                                
                            </tbody>
                            <?php

                            }
                        ?>
       
            
                </div>   
            </div> 
    </body>
</html>