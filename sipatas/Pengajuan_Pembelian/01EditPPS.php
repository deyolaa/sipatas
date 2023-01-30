<?php
include '../config.php'; 

$kode = $_GET['id_pengajuan'];
$sql8 = mysqli_query($con, "SELECT * from pengajuan_sapi where id_pengajuan='$kode'");
$row = mysqli_fetch_array ($sql8);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPATAS</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../halaman/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body background="../halaman/img/sipatasbg.png">


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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data Pengajuan (<?php echo $row['id_pengajuan']?>) </h1>
                                    </div>
                                    
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input name="id_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="id_pengajuan" placeholder="id_pengajuan" readonly value="<?php echo $row['id_pengajuan']?>">
                                            <br>    
                                            <input name="email_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="email_pengajuan" placeholder="email_pengajuan" value="<?php echo $row['email_pengajuan']?>">
                                                <br> 
                                            <input name="nama_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nama_pengajuan" placeholder="nama-pengajuan" value="<?php echo $row['nama_pengajuan']?>">
                                                <br>    
                                            <input name="instansi_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="merkHelp" placeholder="instansi_pengajuan" value="<?php echo $row['instansi_pengajuan']?>">
                                                <br>
                                            <input name="nomor_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nomorpengajuan" placeholder="nomor_pengajuan"  value="<?php echo $row['nomor_pengajuan']?>">
                                                <br>
                                            <input name="sapi_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="jenis_sapi" placeholder="sapi_pengajuan" value="<?php echo $row['sapi_pengajuan']?>">
                                                <br>     
                                            <input name="jumlah_pengajuan" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="tanggal" placeholder="jumlah_pengajuan"  value="<?php echo $row['jumlah_pengajuan']?>">
                                                <br>
                                            <input name="alasan_pengajuan" type="timestamp" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="Alasan" placeholder="alasan_pengajuan" readonly value="<?php echo $row['alasan_pengajuan']?>">
                                                <br>
                                            <input name="surat_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="file" placeholder="surat_pengajuan" readonly value="<?php echo $row['surat_pengajuan']?>">
                                                <br>
                                        </div>
                                        
                                       
                                        <input class="btn btn-primary " type="submit" name="simpan" value="Simpan">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small text-danger" href="01AListPPS.php">Kembali</a>
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
        $id_pengajuan = $_POST['id_pengajuan'];
        $email_pengajuan   = $_POST['email_pengajuan'];
        $nama_pengajuan     = $_POST['nama_pengajuan'];
        $instansi_pengajuan   = $_POST["instansi_pengajuan"];
        $nomor_pengajuan   = $_POST["nomor_pengajuan"];
        $sapi_pengajuan   = $_POST["sapi_pengajuan"];
        $jumlah_pengajuan   = $_POST["jumlah_pengajuan"];

    $sql8 = mysqli_query($con, "UPDATE pengajuan_sapi SET email_pengajuan='$email_pengajuan' , nama_pengajuan='$nama_pengajuan' , instansi_pengajuan='$instansi_pengajuan' , nomor_pengajuan='$nomor_pengajuan', sapi_pengajuan='$sapi_pengajuan', jumlah_pengajuan='$jumlah_pengajuan'
    WHERE id_pengajuan='$id_pengajuan' ");

    if ($sql8) {
        echo "<script>alert('Data berhasil diedit');window.location='01AListPPS.php';</script>";
    } else {
        echo mysqli_error($con);
    }

    }?>

    </div>



    <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>

</body>

</html>