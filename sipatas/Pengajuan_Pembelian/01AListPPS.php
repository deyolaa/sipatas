<?php
include "../config.php";
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
                <li class="nav-item">
                    <a class="nav-link" href="01AListPPS.php">
                        <i class="bi bi-envelope"></i>
                    <span>Pengajuan</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="01ListIkm.php">
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
                <div id="content" class="col-md-9  col-lg-10 px-md-4 mb-5">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="#">Pengajuan Pembelian Sapi</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                          <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </div>
                    </nav>
            

            <!-- Table-->
            <h5 class="text-black mx-5 mb-3">List Pengajuan Pembelian</h5>
            <a type="button" href="01CLPengajuan.php" class="btn btn-primary"><i class="bi bi-printer"></i>  Cetak Laporan</a>
            <a type="button" href="01ExcelPengajuan.php" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></i> Export to Excel</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Pengajuan</th>
                                    <th>Nama Perwakilan</th>
                                    <th>Instansi / Organisasi</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $sql1 = "SELECT * FROM pengajuan_sapi";
                            $result = mysqli_query($con, $sql1);
                            while ($row= mysqli_fetch_assoc($result)){
                        ?>

                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['id_pengajuan'];?></td>
                                <td><?php echo $row['nama_pengajuan'];?></td>
                                <td><?php echo $row['instansi_pengajuan'];?></td>
                                <td><?php echo $row['email_pengajuan'];?></td>
                                <td>
                                    <a type="button" class="btn btn-primary" style="background-color: blue;" onclick="location.href='01DetailPPS.php?id_pengajuan=<?php echo $row['id_pengajuan'];?> ';"><i class="bi bi-info-lg"></i></a>
                                    <a type="button" class="btn btn-warning" style="background-color: #E15B29;"  href="01EditPPS.php?id_pengajuan=<?= $row['id_pengajuan'] ?>"><i class="bi bi-pencil-square"></i></a>
                                    <a type="button" onclick="return confirm('Anda yakin menghapus data pengajuan ini ?')" href="01HapusPengajuanSapi.php?id_pengajuan=<?= $row['id_pengajuan'] ?>"class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>                                        
                                </td>
                            </tr>                
                        </tbody>
                        <?php
                            }
                        ?>
                        </table>  
                        </div>
                    </div> 
                </div>   
            </div> 
    </body>
</html>