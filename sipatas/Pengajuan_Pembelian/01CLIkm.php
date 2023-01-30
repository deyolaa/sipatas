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


                <!-- Main Content -->
                <div id="content" class="mx-4">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light my-2">
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
                    </nav>
            

                    <h5 class="text-black mb-3">List IKM</h5>
                  
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
                        <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Instansi / Organisasi</th>
                                    <th>Telepon</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pekerjaan</th>
                                    <th>Kritik dan Saran</th>

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
                             <script>window.print()</script>
                        <tbody>
                            <tr>
                            <td class="text-center" ><?php echo $no++;?></td>
                                <td class="text-center"><?php echo $row['id_ikm'];?></td>

                                <td><?php echo $row['tanggal_ikm'];?></td>
                                <td><?php echo $row['nama_ikm'];?></td>
                                <td><?php echo $row['instansi_ikm'];?></td>
                                <td><?php echo $row['nomor_ikm'];?></td>
                                <td><?php echo $row['umur_ikm'];?></td>
                                <td><?php echo $row['jeniskelamin_ikm'];?></td>
                                <td><?php echo $row['pendidikan_ikm'];?></td>
                                <td><?php echo $row['pekerjaan_ikm'];?></td>
                                <td><?php echo $row['kritik_ikm'];?></td>
                                
                               
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