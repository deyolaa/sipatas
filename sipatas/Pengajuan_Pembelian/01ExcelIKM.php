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
                          <a class="navbar-brand fw-bolder" href="#">Indeks Kepuasan Masyarakat</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                         
                        </div>
                    </nav>
            

                    <h5 class="text-black mx-5 mb-3">List IKM</h5>
                    <div class="table-responsive">
                    <button type="button" id="downloadexcel" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></i>Download Excel</button>
                        <table class="table table-striped table-sm table-bordered"  id="ikmm" width="100%" cellspacing="0">
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
            <script>
                 document.getElementById('downloadexcel');addEventListener('click',function () {
                    var table2excel = new Table2Excel();
                    table2excel.export(document.querySelectorAll("#ikmm"));
                })
        </script>
    </body>
</html>