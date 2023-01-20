<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

        <?php
            include "../config.php";

            if (isset($_POST['simpan'])) {
                $email_kun = $_POST['email_kun'];
                $instansi_kun = $_POST['instansi_kun'];
                $nama_kun = $_POST['nama_kun'];
                $whatsapp_kun = $_POST['nomor_kun'];
                $tujuan_kun = $_POST['tujuan_kun'];
                $tgl_kun = $_POST['tanggal_kun'];
                $waktu_kun = $_POST['waktu_kun'];
                $surat_kun = $_POST['surat_kun'];

                $sql1 = "INSERT INTO kunjungan (id_pengajuan, email_kun, instansi_kun, nama_kun, whatsapp_kun, tujuan_kun, tgl_kun, waktu_kun, surat_kun) VALUES (NULL,'$email_kun','$instansi_kun','$nama_kun','$whatsapp_kun','$tujuan_kun','$tgl_kun','$waktu_kun','$surat_kun')"; 

                $result = mysqli_query($con,$sql1);
            }
        
        ?>

    <form action="" method="POST" class="parent" style="margin-left:100px">
        <div class="form-grup">
            <table class="isian" >
                <tr class="baris"><td>email</td> <td><input type="text" name="email_kun" required></td> </tr>
                <tr class="baris"><td>nama Instansi</td> <td><input type="text" name="instansi_kun" required></td> </tr>
                <tr class="baris"><td>Nama</td> <td><input type="text" name="nama_kun" required></td> </tr>
                <tr class="baris"><td>whatsapp</td> <td><input type="number" name="whatsapp_kun" required></td> </tr>
                <tr class="baris"><td>tujuan</td> <td><input type="text" name="tujuan_kun" required></td> </tr>
                <tr class="baris"><td>tanggal</td> <td><input type="date" name="tgl_kun" required></td> </tr>
                <tr class="baris"><td>waktu</td> <td><input type="time" name="waktu_kun" required></td> </tr>
                <tr class="baris"><td>surat</td> <td><input type="file" name="surat_kun" required></td> </tr>
            </table>
            <input type="submit"  class="tombol-kuning" name="simpan" value="Simpan">
        </div>
    </form>
    
</body>
</html>