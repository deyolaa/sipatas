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
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

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
            <?php
                if(isset($_POST['filter'])){
                    $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                    $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                    $data_absen = mysqli_query($con, "SELECT * FROM absenmg WHERE tglabs BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                    echo "Dari Tanggal " .$dari_tgl. " Sampai Tanggal " .$sampai_tgl;
                } else {
                    $data_absen = mysqli_fetch_array($con, "SELECT * FROM absenmg");
                }
                while ($tampil = mysqli_fetch_array($data_absen))
            ?>
            <br>
                    <div class="table-responsive">
                    <a type="button" id="downloadexcel"  class="btn btn-success "><i class="bi bi-file-earmark-excel"></i></i> Export to Excel</a>
                    <table class="table table-striped table-sm table-bordered my-3"  id="dataAbsen" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Sekolah/Universitas</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                        
                            <?php
                            $no = 1;
                            if(isset($_POST['filter'])){
                                $dari_tgl = mysqli_real_escape_string($con, $_POST['dari_tgl']);
                                $sampai_tgl = mysqli_real_escape_string($con, $_POST['sampai_tgl']);
                                $data_absen = mysqli_query($con, "SELECT * FROM absenmg WHERE tglabs BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                            
                            } else {
                                $data_absen = mysqli_fetch_array($con, "SELECT * FROM absenmg");
                            }

                            $sql3 = "SELECT * FROM absenmg WHERE tglabs BETWEEN '$dari_tgl' AND '$sampai_tgl'";
                            $result = mysqli_query($con, $sql3);

                            while ($row= mysqli_fetch_assoc($result)){
                        ?>

                            <script>
                                document.getElementById('downloadexcel');addEventListener('click',function () {
                                    var table2excel = new Table2Excel();
                                    table2excel.export(document.querySelectorAll("#dataAbsen"));
                                })
                            </script>
                            <tbody>
                                <tr>
                                    <td class="text-center"><?php echo $row['id_magang'];?></td>
                                    <td><?php echo $row['namaabs'];?></td>
                                    <td><?php echo $row['asalabs']  ;?></td>
                                    <td><?php echo $row['tglabs']  ;?></td>
                                
                                </tr>                
                            </tbody>
                        <?php

                            }
                        ?>
                            </tbody>
                        </table>  
                    </div> 
                </div>   
            </div>
             
    </body>
</html>