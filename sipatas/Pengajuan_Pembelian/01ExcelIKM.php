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
                    $data_magang = mysqli_query($con, "SELECT * FROM db_ikm WHERE tanggal_ikm BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                    echo "Dari Tanggal " .$dari_tgl. " Sampai Tanggal " .$sampai_tgl;
                } else {
                    $data_absen = mysqli_fetch_array($con, "SELECT * FROM db_ikm");
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
                                <th>ID</th>
                                    <th>Nama</th>
                                    <th>Instansi / Organisasi</th>
                                    <th>Telepon</th>
                                    <th>Umur</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pekerjaan</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>Kritik & Saran</th>

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
                         <script>
                            document.getElementById('downloadexcel');addEventListener('click',function () {
                                var table2excel = new Table2Excel();
                                table2excel.export(document.querySelectorAll("#dataTable"));
                            })
                        </script> 
                        <tbody>
                            <tr>
                                
                            <td class="text-center" ><?php echo $no++;?></td>
                            <td class="text-center"><?php echo $row['id_ikm'];?></td>
                                <td><?php echo $row['nama_ikm'];?></td>
                                <td><?php echo $row['instansi_ikm'];?></td>
                                <td><?php echo $row['nomor_ikm'];?></td>
                                <td><?php echo $row['umur_ikm'];?></td>
                                <td><?php echo $row['pendidikan_ikm'];?></td>
                                <td><?php echo $row['pekerjaan_ikm'];?></td>
                                <td><?php echo $row['pertanyaan1'];?></td>
                                <td><?php echo $row['pertanyaan2'];?></td>
                                <td><?php echo $row['pertanyaan3'];?></td>
                                <td><?php echo $row['pertanyaan4'];?></td>
                                <td><?php echo $row['pertanyaan5'];?></td>
                                <td><?php echo $row['pertanyaan6'];?></td>
                                <td><?php echo $row['pertanyaan7'];?></td>
                                <td><?php echo $row['pertanyaan8'];?></td>
                                <td><?php echo $row['pertanyaan9'];?></td>
                                <td><?php echo $row['pertanyaan10'];?></td>
                                <td><?php echo $row['pertanyaan11'];?></td>
                                <td><?php echo $row['pertanyaan12'];?></td>
                                <td><?php echo $row['pertanyaan13'];?></td>
                                <td><?php echo $row['pertanyaan14'];?></td>
                                <td><?php echo $row['kritik_ikm'];?></td>
                                    
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