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
                    <a class="nav-link" href="03APTamu.php">
                        <i class="bi bi-door-closed"></i>
                    <span>Back</span></a>
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
                          <a class="navbar-brand fw-bolder" href="#">Pengajuan Kunjungan BPTU HPT Patas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
            

            
                     
                    <?php
                        $sql6 = "SELECT * FROM kunjungan WHERE id_pengajuan = '$id_pengajuan'" ;
                        $result = $con->query($sql6);
                        while ($row= mysqli_fetch_assoc($result)){
                    ?>
                    <h5 class="text-black my-3">Detail Pengajuan <?php echo $row['instansi_kun']?></h5>

                    <a type="button" class="btn btn-primary mb-3 mx-3" style="background-color: green;" onclick="location.href='https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp_kun'];?>';"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                    
                    <a type="button" class="btn btn-primary mb-3 mx-3" style="background-color: green;" href='03DownloadFile.php?url=<?php echo $row['surat_kun'];?>';"><i class="bi bi-whatsapp"></i>Download Surat</a>
                    

                    <table class="table text-black table-sm table-bordered mx-3"  id="dataTable" width="100%" cellspacing="0">
                    
                                <tr>   
                                    <th>ID</th>
                                    <td><?php echo $row['id_pengajuan']?></td>
                                    </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $row['email_kun']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Nama Instansi</th>
                                    <td><?php echo $row['instansi_kun']; ?></td>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Nama Perwakilan</th>
                                    <td><?php echo $row['nama_kun']; ?></td>
                                    </tr>
                                <tr>
                                    <th>No. WhatsApp</th>
                                    <td><?php echo $row['whatsapp_kun']; ?></td>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Tujuan Kunjungan</th>
                                    <td><?php echo $row['tujuan_kun']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Jadwal Kunjungan</th>
                                    <td><?php echo $row['tgl_kun']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Waktu Kunjungan</th>
                                    <td><?php echo $row['waktu_kun']; ?></td>
                                    </tr>
                                <tr>
                                    <th>Surat Kunjungan</th>
                                    <td><?php echo $row['surat_kun']; ?></td>
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