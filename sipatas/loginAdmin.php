<?php
session_start();

include('config.php');
    $id_admin = "";
    $password = "";
    $err = "";

    if (isset($_POST['login'])){
        $id_admin   = $_POST['id_admin'];
        $password   = $_POST['password'];
        $err = '';
        if ($id_admin == '' or $password == '') {
            $err .= "<li>Silakan masukkan id_admin dan juga password.</li>";
            header("location:loginAdmin.php");
        }else{
            $sql1 = "select * from login where id_admin = '$id_admin'";
            $result = mysqli_query($con, $sql1);
            $sql2 = mysqli_fetch_array($result);
            $role = $sql2['kode_admin'];
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
            if ($_SESSION['role'] == '001'){
                header("location:Pengajuan_Pembelian/01APengSapi.php");
            }else if ($_SESSION['role'] == '002'){
                header("location:magang/02AMagang.php");
            } else if ($_SESSION['role'] == '003') {
            header("location:Tamu/03ATamu.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>SIPATAS</title>
        <link href="halaman/css/styles.css" rel="stylesheet" />
    </head>
    <body background="halaman/img/sipatasbg.png">
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <img src="halaman/img/peternakan.png" height="60px" align="left"/> 
                <img src="halaman/img/PKH.png" height="60px" align="left"/> 
                <img src="halaman/img/bptu.png" height="60px" align="left"/>               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="halaman/HomePage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="halaman/About.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="halaman/Contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../sipatas/loginAdmin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section >    
        <div class="container px-5 ">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6 text-center my-5">
                    <div class="display-5 fw-bolder text-white mb-2">ADMIN LOGIN</div>
                    <p class="lead text-white-50 mb-1">Masukkan id dan password anda</p>
            </div>      
                <div  class="panel-body center" >            
                    <form id="loginform" class="form-horizontal " action="" method="post" role="form">       
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="id_admin"
                            placeholder="instansi" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control"  name="password"
                            placeholder="instansi" required>
                        <label for="floatingInput">Username</label>
                    </div>
                        
                        <input class="submit btn btn-success col-md-5 col-sm-5" style="margin-top: 20px;" type="submit" value="Login" name="login">

                    </form>    
                </div>                    
            </div>  
        </div>
    </div>    
        
        
        
        </section>
        <footer>
            <div class="container px-5 my-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>
    </body>
</html>