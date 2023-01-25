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
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <form method="post">
                            <table>
                                <tr>
                                    <td>Pilih Tanggal</td>
                                    <td><input type="date" name="tgl" required="required"></td>
                                    <td><input type="submit" class="btn btn-primary" name="filter" value="filter"</td>
                                </tr>
                            </table>
                        </form>
                    </nav>
            
            <!-- Table-->
            
            <?php
                if(isset($_POST['filter'])){
                    $tgl = mysqli_real_escape_string($con, $_POST['tgl']);
                    echo "Absensi Peserta Magang Tanggal " .$tgl;
                }
            ?>
            <br>
                    <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered my-3"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Sekolah/Universitas</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>

                            <?php

                            $sql3 = "SELECT * FROM absenmg WHERE tglabs = '$tgl'";
                            $result = mysqli_query($con, $sql3);
                            

                            while ($row= mysqli_fetch_assoc($result)){
                        ?>
                            <script>window.print()</script>
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