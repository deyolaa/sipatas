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
            

            <!-- Table-->
            <h5 class="text-black mx-5 mb-3">Laporan Pengajuan Kunjungan BPTU HPT Padang Mengatas</h5>
                    <div class="table-responsive">
                    <button type="button" id="downloadexcel" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></i>Download Excel</button>
                    <table class="table table-sm my-3"  id="pengajuan" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th class="text-center">ID Pengajuan</th>
                                <th>Email</th>
                                <th>Instansi</th>
                                <th>Perwakilan</th>
                                <th>No WhatsApp</th>
                                <th>Tujuan</th>
                                <th>Tanggal Kunjungan</th>
                              
                            </tr>
                        </thead>

                        <?php
                            $sql1 = "SELECT * FROM kunjungan";
                            $result = mysqli_query($con, $sql1);
                            while ($row= mysqli_fetch_assoc($result)){
                        ?>

                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['id_pengajuan'];?></td>
                                <td><?php echo $row['email_kun'];?></td>
                                <td><?php echo $row['instansi_kun'];?></td>
                                <td><?php echo $row['nama_kun'];?></td>
                                <td><?php echo $row['whatsapp_kun'];?></td>
                                <td><?php echo $row['tujuan_kun'];?></td>
                                <td><?php echo $row['tgl_kun'];?></td>
                            </tr>                
                        </tbody>
                        <?php

                            }
                        ?>
                    
                    </table>   
                    </div> 
                </div>   
            </div> 
            <script>
                document.getElementById('downloadexcel');addEventListener('click',function () {
                    var table2excel = new Table2Excel();
                    table2excel.export(document.querySelectorAll("#pengajuan"));
                })
            </script>
            
            
    </body>
</html>