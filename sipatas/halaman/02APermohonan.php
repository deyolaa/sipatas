<html>
    <head>
        <title>SIPATAS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="./css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
    </head>
    <body  style="background-color: white;">

        <!-- SIDEBAR -->
        <div id="wrapper">
            <ul class="navbar-nav bg-black sidebar sidebar-dark accordion">
                <a class="my-2 sidebar-brand d-flex align-items-center justify-content-center">
                    <img src="img/bptu.png" height="60px" /> 
                    
                </a>

                <hr class="mx-1 sidebar-divider d-none d-md-block">
    
                <!-- Heading -->
                <div class=" sidebar-heading">
                    Menu Admin
                </div>
                
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="02AMagang.php">
                        <i class="bi bi-house"></i>
                    <span>Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="02APermohonan.php">
                        <i class="bi bi-envelope"></i>
                    <span>Permohonan Magang</span></a>
                </li>
    
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="02AAbsen.html">
                        <i class="bi bi-book"></i>
                    <span>Absensi Magang</span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link" href="loginAdmin.html">
                        <i class="bi bi-door-closed"></i>
                    <span>Logout</span></a>
                </li>

                
 
            </ul>
            <div id="content-wrapper" class="d-flex flex-column ">

                <!-- Main Content -->
                <div id="content" class="mx-4">
            
                    <!-- Topbar -->
                    <nav class="nnavbar navbar-expand-lg navbar-light bg-light my-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand fw-bolder" href="02APermohonan.html">Permohonan Magang BPTU HPT Padang Mengatas</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                          <form class="form-inline my-2 mr-auto mx-5">
                            <input class="form-control mr-sm-2 me-2" type="search" placeholder="Search" aria-label="Search" >
                            <button class=" btn btn-outline-success" type="submit">Search</button>
                          </form>
                        </div>
                    </nav>
            

            <!-- Table-->
            <h5 class="text-black my-3">List Permohonan Magang</h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered"  id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>email</th>
                                    <th>Sekolah/Universitas</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Selesai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>suryabunda@gmail.com</td>
                                    <td>PT. Bunda Surya</td>
                                    <td>23-03-2023</td>
                                    <td>23-04-2023</td>
                                    <td>
                                        <a type="button" class="btn btn-primary" style="background-color: blue;" href="02ADetailPermohonan.html"><i class="bi bi-info-lg"></i></a>
                                        <a type="button" onclick="return confirm('Anda yakin menghapus data ini ?')" href=""class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>jayaabadi@gmail.com</td>
                                    <td>PT. Jaya Abadi</td>
                                    <td>04-02-2023</td>
                                    <td>04-03-2023</td>
                                    <td>
                                        <a type="button" class="btn btn-primary" style="background-color: blue;" href=""><i class="bi bi-info-lg"></i></a>
                                        <a type="button" onclick="return confirm('Anda yakin menghapus data ini ?')" href=""class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>  
                    </div> 
                </div>   
            </div> 
    </body>
</html>