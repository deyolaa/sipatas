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

        <!-- SIDEBAR -->
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column ">

                <!-- Main Content -->
                <div id="content" class="col-md-9  col-lg-10 px-md-4 mb-5">
            
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            

            <!-- Table-->
            <h5 class="text-black  mb-3">Laporan Buku Tamu BPTU HPT Padang Mengatas</h5>
            <?php
                            if(isset($_POST['filter'])){
                                $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                                $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                                $data_magang = mysqli_query($con, "SELECT * FROM tamu WHERE tgl_tamu BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                                echo "Dari Tanggal " .$dari_tgl. " Sampai Tanggal " .$sampai_tgl;
                            } else {
                                $data_absen = mysqli_fetch_array($con, "SELECT * FROM tamu");
                            }
                        while ($tampil = mysqli_fetch_array($data_magang))
                    ?>
                    <div class="table-responsive">
                    <table class="table table-bordered my-2"  id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th class="text-center">ID Pengunjung</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Tanggal Kunjungan</th>
                                
                            </tr>
                        </thead>

                        <?php
                            $no = 1;
                            if(isset($_POST['filter'])){
                                $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                                $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                                $data_absen = mysqli_query($con, "SELECT * FROM tamu WHERE tgl_tamu BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                            
                            } else {
                                $data_absen = mysqli_fetch_array($con, "SELECT * FROM tamu");
                            }

                            $sql3 = "SELECT * FROM tamu WHERE tgl_tamu BETWEEN '$dari_tgl' AND '$sampai_tgl'";
                            $result = mysqli_query($con, $sql3);

                            while ($row= mysqli_fetch_assoc($result)){
                        ?>
                        <script>window.print()</script>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['id_tamu'];?></td>
                                <td><?php echo $row['nama_tamu'];?></td>
                                <td><?php echo $row['instansi_tamu'];?></td>
                                <td><?php echo $row['tgl_tamu'];?></td>
                               
                            </tr>                
                        </tbody>
                        <?php

                            }
                        ?>
                    
                    </table> 
                       
                    </div> 
                </div>   
            </div> 
            
    </body>
</html>