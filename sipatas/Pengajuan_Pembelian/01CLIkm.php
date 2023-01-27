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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="#">Indeks Kepuasan Masyarakat</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
            

                    <h5 class="text-black mx-5 mb-3">List IKM</h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Instansi / Organisasi</th>
                                    <th>Telepon</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pekerjaan</th>
                                    <th>Kritik</th>

                                    
                                </tr>
                            </thead>
                            <?php
                            $sql1 = "SELECT * FROM db_ikm";
                            $result = mysqli_query($con, $sql1);
                            while ($row= mysqli_fetch_assoc($result)){
                        ?>

                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['id_ikm'];?></td>
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
            <script>
                window.print()
        </script>
    </body>
</html>