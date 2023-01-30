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
        <script src="table2excel.js"></script>
    </head>
    <body  style="background-color: white;">

                <!-- Main Content -->
                <div id="content" class="mx-4">
            
                    <!-- Topbar -->
                    <nav class="navbar-expand-lg navbar-light bg-light my-2">
                   
                    
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

                <?php
                if(isset($_POST['filter'])){
                    $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                    $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                    $data_magang = mysqli_query($con, "SELECT * FROM pengajuan_sapi WHERE tanggal_pengajuan BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                    echo "Dari Tanggal " .$dari_tgl. " Sampai Tanggal " .$sampai_tgl;
                } else {
                    $data_absen = mysqli_fetch_array($con, "SELECT * FROM pengajuan_sapi");
                }
                while ($tampil = mysqli_fetch_array($data_magang))
            ?>
           

            <!-- Table-->
            <h5 class="text-black my-3">List Pengajuan Pembelian</h5>
          `       <div class="table-responsive">
                        <button type="button" id="downloadexcel"  class="btn btn-success "><i class="bi bi-file-earmark-excel"></i></i> Download Excel</button>
                         
                        <table class="table table-striped table-sm table-bordered my-3"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>ID</th>
                                    <th>Nama Perwakilan</th>
                                    <th>Instansi / Organisasi</th>
                                    <th>Nomor Telepon</th>
                                    <th>Jenis Sapi</th>
                                    <th>Jumlah</th>
                                    <th>Alasan Pengajuan</th>
                                </tr>
                            </thead>

                            <?php
                             $no = 1;
                             if(isset($_POST['filter'])){
                                 $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                                 $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                                 $data_absen = mysqli_query($con, "SELECT * FROM pengajuan_sapi WHERE id_pengajuan BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                             
                             } else {
                                 $data_absen = mysqli_fetch_array($con, "SELECT * FROM pengajuan_sapi");
                             }
                            $sql1 = "SELECT * FROM pengajuan_sapi WHERE tanggal_pengajuan BETWEEN '$dari_tgl' AND '$sampai_tgl'";
                            $result = mysqli_query($con, $sql1);
                            while ($row= mysqli_fetch_assoc($result)){
                        ?>
                         <script>
                            document.getElementById('downloadexcel');addEventListener('click',function () {
                                var table2excel = new Table2Excel();
                                table2excel.export(document.querySelectorAll("#dataTable"));
                            })
                        </script> 
                        <tbody>
                            <tr>
                                
                            <td class="text-center" ><?php echo $no++;?></td>
                                <td><?php echo $row['tanggal_pengajuan'];?></td>
                                <td class="text-center"><?php echo $row['id_pengajuan'];?></td>
                                <td><?php echo $row['nama_pengajuan'];?></td>
                                <td><?php echo $row['instansi_pengajuan'];?></td>
                                <td><?php echo $row['nomor_pengajuan'];?></td>
                                <td><?php echo $row['sapi_pengajuan'];?></td>
                                <td><?php echo $row['jumlah_pengajuan'];?></td>
                                <td><?php echo $row['alasan_pengajuan'];?></td>
                                
                                    
                            </tr>                
                        </tbody>
                        <?php
                            }
                        ?>
                        </table>  
                        </div>
                    </div> 
                </div>   
            </div> 
    </body>
</html>