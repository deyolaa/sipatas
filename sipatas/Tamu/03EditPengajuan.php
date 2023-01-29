<!-- HALAMAN UNTUK EDIT STOK BARANG ADMIN -->

<?php
include '../config.php'; 

$kode = $_GET['id_pengajuan'];
$sql8 = mysqli_query($con, "SELECT * from kunjungan where id_pengajuan='$kode'");
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
    <link href="../halaman/css/sb-admin-2.min.css" rel="    stylesheet">

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
                                                id="exampleInputEmail" aria-describedby="id_pengajuan" placeholder="id_tamu" readonly value="<?php echo $row['id_pengajuan']?>">
                                            <br>    
                                            <input name="email_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="email_kun" placeholder="Email" value="<?php echo $row['email_kun']?>">
                                                <br> 
                                            <input name="nama_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nama_kun" placeholder="Nama" value="<?php echo $row['nama_kun']?>">
                                                <br>    
                                            <input name="instansi_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="merkHelp" placeholder="Instansi" value="<?php echo $row['instansi_kun']?>">
                                                <br>
                                            <input name="tujuan_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="merkHelp" placeholder="Tujuan"  value="<?php echo $row['tujuan_kun']?>">
                                                <br>
                                            <input name="whatsapp_kun" type="number" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="jumlahHelp" placeholder="nomor" value="<?php echo $row['whatsapp_kun']?>">
                                                <br>     
                                            <input name="tgl_kun" type="date" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="tanggal" placeholder="tanggal" readonly value="<?php echo $row['tgl_kun']?>">
                                                <br>
                                            <input name="waktu_kun" type="timestamp" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="waktu" placeholder="waktu" readonly value="<?php echo $row['waktu_kun']?>">
                                                <br>
                                            <input name="surat_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="file" placeholder="file" readonly value="<?php echo $row['surat_kun']?>">
                                                <br>
                                            <input name="status_kun" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="status_kun" placeholder="Konfirmasi Pengajuan" value="<?php echo $row['status_kun']?>">
                                                <br>   
                                        </div>
                                        
                                       
                                        <input class="btn btn-danger " type="submit" name="simpan" value="Simpan">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small text-danger" href="03APTamu.php">Kembali</a>
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
        $email_kun    = $_POST['email_kun'];
        $nama_kun      = $_POST['nama_kun'];
        $instansi_kun    = $_POST["instansi_kun"];
        $tujuan_kun    = $_POST["tujuan_kun"];
        $whatsapp_kun    = $_POST["whatsapp_kun"];
        $status_kun    = $_POST["status_kun"];


    $sql8 = mysqli_query($con, "UPDATE kunjungan SET email_kun='$email_kun' , nama_kun='$nama_kun' , instansi_kun='$instansi_kun' , tujuan_kun='$tujuan_kun', whatsapp_kun='$whatsapp_kun', status_kun='$status_kun'
    WHERE id_pengajuan='$id_pengajuan' ");

    if ($sql8) {
        echo "<script>alert('Data berhasil diedit');window.location='03APTamu.php';</script>";
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