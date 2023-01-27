<?php
    include "../config.php";
    $id_magang = $_GET['id_magang'];
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
                <li class="nav-item active">
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
                          <a class="navbar-brand fw-bolder" href="#">Permohonan Magang BPTU HPT Patas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
                    
                    <?php
                        $sql3 = "SELECT * FROM permohonan_magang WHERE id_magang = '$id_magang'" ;
                        $result = $con->query($sql3);
                        while ($row= mysqli_fetch_assoc($result)){
                    ?>
                    <h5 class="text-black my-3">Permohonan Magang <?php echo $row['asalmg']?></h5>
                    <table class="table table-striped table-sm table-bordered mx-3" id="dataTable" width="100%" cellspacing="0">
                        <tbody>
                                <tr>   
                                    <th>ID</th>
                                    <td><?php echo $row['id_magang']?></td>
                                    </tr>
                                <tr>
                                    <th>email</th>
                                    <td><?php echo $row['emailmg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Sekolah/Universitas</th>
                                    <td><?php echo $row['asalmg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td><?php echo $row['jurusanmg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Perwakilan</th>
                                    <td><?php echo $row['perwakilanmg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Semua Anggota</th>
                                    <td><?php echo $row['anggotamg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>WhatsApp</th>
                                    <td><?php echo $row['nomormg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Tujuan Magang</th>
                                    <td><?php echo $row['tujuanmg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Tanggal Mulai</th>
                                    <td><?php echo $row['mulaimg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Tanggal Selesai</th>
                                    <td><?php echo $row['selesaimg']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Surat</th>
                                    <td><button onclick="location.href='02DownloadSurat.php?suratmg=<?php echo $row['suratmg'] ?> ';"> Download</button><br /></td>
                                    </tr>

                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div> 
        </div> 
    </body>
</html>