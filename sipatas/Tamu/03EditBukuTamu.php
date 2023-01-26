<?php
include '../config.php'; 

$kode = $_GET['id_tamu'];
$sql = mysqli_query($con, "SELECT * from tamu where id_tamu='$kode'");


?>



<html>
    <head>
        <title>SIPATAS</title>
        <link href="../halaman/css/styles.css" rel="stylesheet" />
    </head>
    <body >
       
        <section >
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    
                    <h2 class="display-5 fw-bolder text-black mb-2">Edit Buku Tamu</h2>
                    
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    
                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input name="item_id" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="itemIDHelp" readonly value="<?php echo $row['id_tamu']?>">
                                            <br>    
                                            <input name="deskripsi_item" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="namaHelp" placeholder="Name" value="<?php echo $row['nama_Tamu']?>">
                                                <br>    
                                            <input name="merk" type="merk" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="merkHelp" placeholder="Merk" value="<?php echo $row['instansi_tamu']?>">
                                                <br>
                                            <input name="jumlah" type="number" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="jumlahHelp" placeholder="Jumlah" value="<?php echo $row['whatsapp_tamu']?>">
                                                <br>     
                                            <input name="harga" type="number" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="hargaHelp" placeholder="Harga" value="<?php echo $row['harga']?>">
                                        </div>
                                        
                                        <!-- <a href="antrian/indexcost.php" class="btn btn-primary btn-user btn-block">
                                            Ambil Antrian
                                        </a> -->
                                        <input class="btn btn-danger" type="submit" name="submit" value="Submit">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small text-danger" href="barangadmin.php">Back</a>
                                        </div>
                                    </form>            
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>


        <!-- NAVIGATION BAR END -->

        <!-- FOOTER -->

        <!-- FOOTER END -->
    </body>
</html>