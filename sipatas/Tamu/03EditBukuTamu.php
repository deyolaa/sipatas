<!-- HALAMAN UNTUK EDIT STOK BARANG ADMIN -->

<?php
include '../config.php'; 

$kode = $_GET['id_tamu'];
$sql7 = mysqli_query($con, "SELECT * from tamu where id_tamu='$kode'");
$row = mysqli_fetch_array ($sql7);

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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data Tamu (<?php echo $row['id_tamu']?>) </h1>
                                    </div>
                                    
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input name="id_tamu" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="id_tamus" placeholder="id_tamu" readonly value="<?php echo $row['id_tamu']?>">
                                            <br>    
                                            <input name="nama_tamu" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nama_tamu" placeholder="Name" value="<?php echo $row['nama_tamu']?>">
                                                <br>    
                                            <input name="instansi_tamu" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="merkHelp" placeholder="Instansi" value="<?php echo $row['instansi_tamu']?>">
                                                <br>
                                            <input name="whatsapp_tamu" type="number" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="jumlahHelp" placeholder="nomor" value="<?php echo $row['whatsapp_tamu']?>">
                                                <br>     
                                            <input name="tgl_tamu" type="date" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="tanggal" placeholder="tanggal" readonly value="<?php echo $row['tgl_tamu']?>">
                                                <br>
                                            <input name="kritik_tamu" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="kritik" placeholder="kritik" readonly value="<?php echo $row['kritik_tamu']?>">
                                                <br>
                                        </div>
                                        
                                       
                                        <input class="btn btn-danger " type="submit" name="simpan" value="Simpan">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small text-danger" href="03ABukuTamu.php">Kembali</a>
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
        $id_tamu = $_POST['id_tamu'];
        $nama_tamu      = $_POST['nama_tamu'];
        $instansi_tamu        = $_POST['instansi_tamu'];
        $whatsapp_tamu      = $_POST["whatsapp_tamu"];
        

    $sql8 = mysqli_query($con, "UPDATE tamu SET nama_tamu='$nama_tamu' , instansi_tamu='$instansi_tamu' , whatsapp_tamu='$whatsapp_tamu' 
    WHERE id_tamu='$id_tamu' ");

    if ($sql8) {
        echo "<script>alert('Data berhasil diedit');window.location='03ABukuTamu.php';</script>";
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