<?php
    session_start();

    include 'sipatas/db/config.php';
    if (isset($_POST['loginAdmin'])){
        $id_admin   = $_POST['id_admin'];
        $password   = $_POST['password'];
        $err = '';
        if($id_karyawan == '' or $password == ''){
            $err .= "<li>Silakan masukkan id_karyawan dan juga password.</li>";
            header("location:loginAdmin.php");
        }else{
            $sql1 = "select * from karyawan where id_admin = '$id_admin'";
            $result = pg_query($conn, $sql1);
            $sql2 = pg_fetch_array($result);
            $role = $sql2['id_admin'];
        }   

        if($sql2['id_admin'] == ''){
            $err .= "<li>id_admin <b>$id_admin</b> tidak tersedia.</li>";
            header("location:loginAdmin.php");
        }elseif($sql2['password'] != md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
            header("location:loginAdmin.php");
        }

        if(empty($err)){
            $_SESSION['session_id_admin'] = $id_admin; //server
            $_SESSION['session_password'] = md5($password);
            $_SESSION['role'] = $role;
            if ($_SESSION['role'] == 'admin1'){
                header("location:01APengSapi.php");
            }else if ($_SESSION['role'] == 'admin2'){
                header("location:02AMagang.php");
            }else if ($_SESSION['role'] == 'admin3'){
                header("location:03ATamu.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIPATAS</title>
        <link href="css/styles.css" rel="stylesheet" />
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
                    
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="HomePage.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section >
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    
                    <h2 class="fw-bolder text-white">Login</h2>
                    <p class="lead mb-0 text-white">Silahkan masukkan username dan password anda, Selamat Bekerja</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Username</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <input type="submit" name="login" class="btn btn-success" value="Login"/>
                            </div>
                            </div>
                            <a class="btn btn-outline-light btn-lg px-4" href="03ATamu.html">Admin Tamu</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="02AMagang.html">Admin Magang</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="01APengSapi.html">Admin Pembelian</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>


        <!-- NAVIGATION BAR END -->

        <!-- FOOTER -->

        <!-- FOOTER END -->
    </body>
</html>