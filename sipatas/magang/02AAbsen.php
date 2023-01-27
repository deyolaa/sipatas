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
                <li class="nav-item active">
                    <a class="nav-link active" href="02AAbsen.php">
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
                <div id="content" class="mx-4">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder my-2" href="02AAbsen.php">Absensi Peserta Magang</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                        </div>
                    </nav>
            
            <!-- Table-->
            <form method="post">
                <table>
                    <tr>
                        <td>Pilih Tanggal</td>
                        <td><input type="date" name="tgl" required="required"></td>
                        <td><input type="submit" class="btn btn-primary" name="filter" value="filter"</td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_POST['filter'])){
                    $tgl = mysqli_real_escape_string($con, $_POST['tgl']);
                    echo "Tanggal " .$tgl;
                }
            ?>
            <br>
                    <div class="table-responsive">
                    <a type="button" id="cetak" href="02CetakLaporanAbsen.php" class="btn btn-primary"><i class="bi bi-printer"></i>  Cetak Laporan</a>
                    <a type="button" id="excel" href="02ExcelAbsen.php" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></i> Export to Excel</a>
                    <table class="table table-striped table-sm table-bordered my-3"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Sekolah/Universitas</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            if(isset($_POST['filter'])){
                                $tgl = mysqli_real_escape_string($con, $_POST['tgl']);
                            }

                            $sql3 = "SELECT * FROM absenmg WHERE tglabs = '$tgl'";
                            $result = mysqli_query($con, $sql3);

                            while ($row= mysqli_fetch_assoc($result)){
                        ?>

                            <tbody>
                                <tr>
                                    <td class="text-center"><?php echo $row['id_magang'];?></td>
                                    <td><?php echo $row['namaabs'];?></td>
                                    <td><?php echo $row['asalabs']  ;?></td>
                                    <td><?php echo $row['tglabs']  ;?></td>
                                    <td>
                                        <a type="button" class="btn btn-primary" style="background-color: blue;" onclick="location.href='02ADetailAbsen.php?id_magang=<?php echo $row['id_magang'];?> ';"><i class="bi bi-info-lg"></i></a>
                                        <a type="button" class="btn btn-warning" style="background-color: #E15B29;" href="02EditAbsen.php?id_magang=<?= $row['id_magang'] ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a type="button" onclick="return confirm('Anda yakin menghapus data pengajuan ini ?')" href="02HapusLaporanAbsen.php?id_magang=<?= $row['id_magang'] ?>"class="btn btn-danger"><i class="bi bi-trash-fill"></i></a
                                    </td>
                                
                                </tr>                
                            </tbody>
                        <?php

                            }
                        ?>
                            </tbody>
                        </table>  
                    </div> 
                </div>   
            </div> 
    </body>
</html>