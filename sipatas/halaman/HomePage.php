<html>
    <head>
        <title>SIPATAS</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body background="img/sipatasbg.png">
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <img src="img/peternakan.png" height="60px" align="left"/> 
                <img src="img/PKH.png" height="60px" align="left"/> 
                <img src="img/bptu.png" height="60px" align="left"/>               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Pengajuan_Pembelian/04IKM.php">IKM</a></li>
                        <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"  href="#" role="button" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >About</a></li>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> -->
                        <li class="nav-item"><a class="nav-link" href="Contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../loginAdmin.php">Admin</a></li>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="About.php">About Us</a></li>
                                <li><a class="dropdown-item" href="Sejarah.php">Sejarah</a></li>
                                <li><a class="dropdown-item" href="VisiMisi.php">Visi Misi</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                </div>
                    </ul>
                </div>
            </div>
        </nav>
   
      
        <header>
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">SIPATAS</h1>
                            <p class="lead text-white-50 mb-4">Dalam upaya untuk memberikan pelayanan terbaik kepada masyarakat maka BPTU HPT Padang Mengatas membuat sistem layanan informasi yang disebut dengan SIPATAS, yang memuat terkait dengan :</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-outline-light btn-lg px-4" href="../magang/02DashboardMagang.php">Magang</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="../Pengajuan_Pembelian/01DashboardPengPembelian.php">Pembelian Sapi</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="../Tamu/03DashboardTamu.php">Kunjungan</a>
                               
                            </div>
                            <p class="lead my-4 text-white"><span id="tanggalwaktu"></span></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>
        <script>
            var tw = new Date();
            if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
            else (a=tw.getTime());
            tw.setTime(a);
            var tahun= tw.getFullYear ();
            var hari= tw.getDay ();
            var bulan= tw.getMonth ();
            var tanggal= tw.getDate ();
            var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
            var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
            document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" W.I.B ");
        </script>
    </body>
</html>