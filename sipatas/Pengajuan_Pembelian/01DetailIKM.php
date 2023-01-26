<?php
    include "../config.php";
    $id_ikm = $_GET['id_ikm'];
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
                <div id="content" class="col-md-9  col-lg-10 px-md-4 mb-5">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="#">Indek Kepuasan Masyarakat BPTU HPT Patas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
            
                    <?php
                        $sql1 = "SELECT * FROM db_ikm WHERE id_ikm = '$id_ikm'" ;
                        $result = $con->query($sql1);
                        while ($row= mysqli_fetch_assoc($result)){
                    ?>
                    <h5 class="text-black my-3">Detail Pengajuan <?php echo $row['instansi_ikm']?></h5>
                    <table class="table text-black table-sm table-bordered mx-3"  id="dataTable" width="100%" cellspacing="0">
                    
                                <tr>   
                                    <th>ID</th>
                                    <td><?php echo $row['id_ikm']?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Responden</th>
                                    <td><?php echo $row['nama_ikm']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Instansi</th>
                                    <td><?php echo $row['instansi_ikm']; ?></td>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>No. Telepon</th>
                                    <td><?php echo $row['nomor_ikm']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?php echo $row['jeniskelamin_ikm']; ?></td>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <td><?php echo $row['pendidikan_ikm']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td><?php echo $row['pekerjaan_ikm']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pertanyaan 1</th>
                                    <td><?php echo $row['pertanyaan1']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pertanyaan 2</th>
                                    <td><?php echo $row['pertanyaan2']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pertanyaan 3</th>
                                    <td><?php echo $row['pertanyaan3']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pertanyaan 4</th>
                                    <td><?php echo $row['pertanyaan4']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pertanyaan 5</th>
                                    <td><?php echo $row['pertanyaan5']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Pertanyaan 6</th>
                                    <td><?php echo $row['pertanyaan6']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 7</th>
                                    <td><?php echo $row['pertanyaan7']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 8</th>
                                    <td><?php echo $row['pertanyaan8']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 9</th>
                                    <td><?php echo $row['pertanyaan9']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 10</th>
                                    <td><?php echo $row['pertanyaan10']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 11</th>
                                    <td><?php echo $row['pertanyaan11']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 12</th>
                                    <td><?php echo $row['pertanyaan12']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Pertanyaan 13</th>
                                    <td><?php echo $row['pertanyaan13']; ?></td>
                                    </tr> <tr>
                                    <th>Pertanyaan 14</th>
                                    <td><?php echo $row['pertanyaan14']; ?></td>
                                    </tr>

                                <tr>
                                    <th>Kritik dan Saran </th>
                                    <td><?php echo $row['kritik_ikm']; ?></td>
                                    </tr>
                                
                            </tbody>
                            <?php

                            }
                        ?>
            
                 
              
                </div>   
            </div> 
    </body>
</html>