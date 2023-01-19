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
        }
        if(empty($err)){
            $sql1 = "select * from login where id_admin = '$id_admin'";
            $result = mysqli_query($con, $sql1);
            $sql2 = mysqli_fetch_array($result);
            if($sql2['password'] != md5($password)){
                $err .= "<li>akun tidak ditemukan.</li>";
            }
        }
        if(empty($err)){
            $_SESSION['id_admin'] = $id_admin; //server
            header("location:loginAdmin.php");
            exit();
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIPATAS</title>
        <link href="halaman/css/styles.css" rel="stylesheet" />
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
                <div  class="text-center mb-5">
                    <h2 class="fw-bolder text-white">Login</h2>
                    <?php
                    if($err){
                        echo"<ul>$err</ul>";
                    }
                    ?>
                    <p class="lead mb-0 text-white">Silahkan masukkan username dan password anda, Selamat Bekerja</p>
                </div>
                    <div id="app">
                        <form action="" method="post">
                            <input type="text" name="id_admin" class="input" placeholder="isikan id_admin..." /><br /><br />
                            <input type="password" name="password" class="input" placeholder="isikan password..." /><br /><br />
                            <input type="submit" name="login" value="Masuk ke sistem" />
                        </form>
                    </div>
            </div>
        </section>
        <footer>
            <div class="container px-5"><p class="m-7 text-center text-white">Copyright &copy; Sistem Informasi Unand</p></div>
        </footer>
    </body>
</html>