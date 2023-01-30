<?php
    include "../config.php";
    $id_magang = $_GET['id_magang'];
  
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
                    <?php
                        $sql3 = "SELECT * FROM absenmg WHERE id_magang = '$id_magang'" ;
                        $result = $con->query($sql3);
                        while ($row= mysqli_fetch_assoc($result)){
                    ?>
            <!-- Table-->
            <h5 class="text-black my-3">Logbook harian <?php echo $row['namaabs']?></h5>
                    <div class="table-responsive">
                        <table class="table table-bordered text-black"  id="dataTable" width="100%" cellspacing="0">
                        
                                <tr>
                                    <th>Tanggal</th>
                                    <td><?php echo $row['tglabs']; ?></td>
                                </tr>
                            
                                <tr>
                                    <th>Nama</th>
                                    <td><?php echo $row['namaabs']; ?></td>
                                </tr>
                            
                                <tr>
                                    <th>Asal Sekolah/Universitas</th>
                                    <td><?php echo $row['asalabs']; ?></td>
                                </tr>

                                <tr>
                                    <th>Pembimbing Lapangan</th>
                                    <td><?php echo $row['pembimbingabs']; ?></td>
                                </tr>

                                <tr>
                                    <th>Bidang (Hari ini)</th>
                                    <td><?php echo $row['bidangabs']; ?></td>
                                </tr>

                                <tr>
                                    <th>Output</th>
                                    <td><?php echo $row['outputabs']; ?></td>
                                </tr>

                                <tr>
                                    <th>Bukti Foto</th>
                                    <td><?php echo $row['buktiabs']; ?></td>
                                </tr>

                                <?php
                                  }
                                ?>
                        </table>
                       
                    </div> 
                </div>   
            </div> 
            <script>
                window.print()
            </script>
            
    </body>
</html>