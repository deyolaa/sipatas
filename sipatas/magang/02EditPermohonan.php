<?php
include '../config.php'; 

$kode = $_GET['id_magang'];
$sql3 = mysqli_query($con, "SELECT * from permohonan_magang where id_magang='$kode'");
$row = mysqli_fetch_array ($sql3);

?>

<html>
    <head>
        <title>SIPATAS</title>
        <link href="../halaman/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="../halaman/css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
    </head>
    <body  style="background-color: black;">

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
                <div id="content" class="mx-4">
            
                    <!-- Topbar -->
                    <nav class="nnavbar navbar-expand-lg navbar-light bg-light my-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="02APermohonan.php">Edit Permohonan Magang BPTU HPT Padang Mengatas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                        </div>
                    </nav>

                    <div class="container px-5">

        <!-- Outer Row -->
        <div class=" d-flex justify-content-center">

            <div class="col-xl-5 col-lg 1 col-md-15">

                <div class="card o-hidden border-1 shadow-lg my-5 bg-gray-200">
                    <div class="card-body p-1">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg 6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data Permohonan (<?php echo $row['id_magang']?>) </h1>
                                    </div>
                                    
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input name="id_magang" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="id_magang" placeholder="id_magang" readonly value="<?php echo $row['id_magang']?>">
                                            <br>    
                                            <input name="emailmg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailmg" placeholder="Email" value="<?php echo $row['emailmg']?>">
                                                <br> 
                                            <input name="asalmg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="asalmg" placeholder="asal" value="<?php echo $row['asalmg']?>">
                                                <br>    
                                            <input name="jurusanmg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="jurusan" placeholder="jurusan" value="<?php echo $row['jurusanmg']?>">
                                                <br>
                                            <input name="perwakilanmg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="perwakilan" placeholder="wakil"  value="<?php echo $row['perwakilanmg']?>">
                                                <br>
                                            <input name="anggotamg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="anggota" placeholder="nomor" value="<?php echo $row['anggotamg']?>">
                                                <br>  
                                            <input name="nomormg" type="number" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nomorwa" placeholder="nomor" value="<?php echo $row['nomormg']?>">
                                                <br>  
                                            <input name="tujuanmg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="tujuan" placeholder="tujuan" value="<?php echo $row['tujuanmg']?>">
                                                <br>   
                                            <input name="mulaimg" type="date" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="tanggal" placeholder="mulai" readonly value="<?php echo $row['mulaimg']?>">
                                                <br>
                                            <input name="selesaimg" type="date" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="tanggal" placeholder="mulai" readonly value="<?php echo $row['selesaimg']?>">
                                                <br>
                                            <input name="suratmg" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="file" placeholder="file" readonly value="<?php echo $row['suratmg']?>">
                                                <br>
                                        </div>
                                        
                                       
                                        <input class="btn btn-danger " type="submit" name="simpan" value="Simpan">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small text-danger" href="02APermohonan.php">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
     
    <?php
    if (isset($_POST['simpan'])) {
        $id_magang      = $_POST['id_magang'];
        $emailmg        = $_POST['emailmg'];
        $asalmg         = $_POST['asalmg'];
        $jurusanmg      = $_POST["jurusanmg"];
        $perwakilanmg   = $_POST["perwakilanmg"];
        $anggotamg      = $_POST["anggotamg"];
        $nomormg        = $_POST["nomormg"];
        $tujuanmg       = $_POST["tujuanmg"];
    $sql3 = mysqli_query($con, "UPDATE permohonan_magang SET emailmg='$emailmg' , asalmg='$asalmg' , jurusanmg='$jurusanmg' , perwakilanmg='$perwakilanmg', anggotamg='$anggotamg', nomormg='$nomormg', tujuanmg='$tujuanmg'
    WHERE id_magang='$id_magang' ");

    if ($sql3) {
        echo "<script>alert('Data berhasil diedit');window.location='02APermohonan.php';</script>";
    } else {
        echo mysqli_error($con);
    }

    }?>

   

                    </div> 
                </div>   
            </div> 
    </body>
</html>