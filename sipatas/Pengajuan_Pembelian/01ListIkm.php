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
                <li class="nav-item active">
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
                    <nav class="navbar-expand-lg navbar-light bg-light my-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="">Indeks Kepuasan Masyarakat</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                        </div>
                    </nav>
            
            

                    <h5 class="text-black mb-3">List IKM</h5>
                    <form method="post">
                <table>
                    <tr>
                        <td>Dari Tanggal </td>
                        <td><input type="date" name="dari_tgl" required="required"></td>
                        <td>Sampai Tanggal </td>
                        <td><input type="date" name="sampai_tgl" required="required"></td>
                        <td><input type="submit" class="btn btn-primary" name="filter" value="filter"</td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_POST['filter'])){
                    $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                    $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                    $data_magang = mysqli_query($con, "SELECT * FROM db_ikm WHERE tanggal_ikm BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                    echo "Dari Tanggal " .$dari_tgl. " Sampai Tanggal " .$sampai_tgl;
                } else {
                    $data_absen = mysqli_fetch_array($con, "SELECT * FROM db_ikm");
                }
                while ($tampil = mysqli_fetch_array($data_magang))
            ?>
            <div class="table-responsive my-3">
                    <a type="button" href="01CLIkm.php" class="btn btn-primary"><i class="bi bi-printer"></i>  Cetak Laporan</a>
                    <a type="button" href="01ExcelIKM.php" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></i> Export to Excel</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Instansi / Organisasi</th>
                                    <th>Telepon</th>
                                    <th>Umur</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                             $no = 1;
                             if(isset($_POST['filter'])){
                                 $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                                 $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                                 $data_absen = mysqli_query($con, "SELECT * FROM db_ikm WHERE id_ikm BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                             
                             } else {
                                 $data_absen = mysqli_fetch_array($con, "SELECT * FROM db_ikm");
                             }
                             $sql1 = "SELECT * FROM db_ikm WHERE tanggal_ikm BETWEEN '$dari_tgl' AND '$sampai_tgl'";
                             $result = mysqli_query($con, $sql1);
                             while ($row= mysqli_fetch_assoc($result)){
                        ?>

                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['id_ikm'];?></td>

                                <td><?php echo $row['tanggal_ikm'];?></td>
                                <td><?php echo $row['nama_ikm'];?></td>
                                <td><?php echo $row['instansi_ikm'];?></td>
                                <td><?php echo $row['nomor_ikm'];?></td>
                                <td><?php echo $row['umur_ikm'];?></td>
                                
                                <td>
                                <a type="button" class="btn btn-primary" style="background-color: blue;" onclick="location.href='01DetailIKM.php?id_ikm=<?php echo $row['id_ikm'];?> ';"><i class="bi bi-info-lg"></i></a>
                                <a type="button" class="btn btn-warning" style="background-color: #E15B29;"  href="01EditIKM.php?id_ikm=<?= $row['id_ikm'] ?>"><i class="bi bi-pencil-square"></i></a>
                                <a type="button" onclick="return confirm('Anda yakin menghapus data pengajuan ini ?')" href="01HapusListIKM.php?id_ikm=<?= $row['id_ikm'] ?>"class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>                                        
                                        
                                </td>
                            </tr>                
                        </tbody>
                        <?php
                            }
                        ?>


                        </table>  
              
                </div>   
            </div> 
    </body>
</html>