<?php
include '../config.php'; 

$kode = $_GET['id_ikm'];
$sql8 = mysqli_query($con, "SELECT * from db_ikm where id_ikm='$kode'");
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
                                        <h1 class="h4 text-gray-900 mb-4">Edit Data IKM (<?php echo $row['id_ikm']?>) </h1>
                                    </div>
                                    
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input name="id_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="id_ikm" placeholder="id_ikm" readonly value="<?php echo $row['id_ikm']?>">
                                            <br>    
                                            <input name="nama_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nama_pengajuan" placeholder="nama_ikm" value="<?php echo $row['nama_ikm']?>">
                                                <br>    
                                            <input name="instansi_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="instansi_ikm" placeholder="instansi_ikm" value="<?php echo $row['instansi_ikm']?>">
                                                <br>
                                            <input name="nomor_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="nomor_ikm" placeholder="nomor_ikm"  value="<?php echo $row['nomor_ikm']?>">
                                                <br>
                                            <input name="umur_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="umur_ikm" placeholder="umur_ikm" value="<?php echo $row['umur_ikm']?>">
                                                <br>     
                                            <input name="jeniskelamin_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="jeniskelamin_ikm" placeholder="jeniskelamin_ikm"  value="<?php echo $row['jeniskelamin_ikm']?>">
                                                <br>
                                            <input name="pendidikan_ikm" type="timestamp" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="pendidikan_ikm" placeholder="pendidikan_ikm"  value="<?php echo $row['pendidikan_ikm']?>">
                                                <br>
                                            <input name="pekerjaan_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="file" placeholder="pekerjaan_ikm" readonly value="<?php echo $row['pekerjaan_ikm']?>">
                                                <br>
                                            <input name="pekerjaan_ikm" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="file" placeholder="kritik_ikm" readonly value="<?php echo $row['kritik_ikm']?>">
                                                <br>
                                            
                                            

                                        </div>
                                        
                                       
                                        <input class="btn btn-primary " type="submit" name="simpan" value="Simpan">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small text-danger" href="01ListIkm.php">Kembali</a>
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
        $id_ikm = $_POST['id_ikm'];
        $nama_ikm    = $_POST['nama_ikm'];
        $instansi_ikm   = $_POST["instansi_ikm"];
        $nomor_ikm  = $_POST["nomor_ikm"];
        $umur_ikm   = $_POST["umur_ikm"];
        $jeniskelamin_ikm   = $_POST["jeniskelamin_ikm"];
        $pendidikan_ikm   = $_POST["pendidikan_ikm"];
        $pekerjaan_ikm   = $_POST["pekerjaan_ikm"];

    $sql8 = mysqli_query($con, "UPDATE db_ikm SET nama_ikm='$nama_ikm' , instansi_ikm='$instansi_ikm' , nomor_ikm='$nomor_ikm', umur_ikm='$umur_ikm', jeniskelamin_ikm='$jeniskelamin_ikm', pendidikan_ikm= '$pendidikan_ikm', pekerjaan_ikm= '$pekerjaan_ikm'
    WHERE id_ikm='$id_ikm' ");

    if ($sql8) {
        echo "<script>alert('Data berhasil diedit');window.location='01ListIkm.php';</script>";
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