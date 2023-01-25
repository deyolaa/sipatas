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
                $email_pengajuan = $_POST['email_pengajuan'];
                $instansi_pengajuan = $_POST['instansi_pengajuan'];
                $nama_pengajuan = $_POST['nama_pengajuan'];
                $nomor_pengajuan = $_POST['nomor_pengajuan'];
                $sapi_pengajuan = $_POST['sapi_pengajuan'];
                $jumlah_pengajuan = $_POST['jumlah_pengajuan'];
                $alasan_pengajuan = $_POST['alasan_pengajuan'];
                $surat_pengajuan = $_POST['surat_pengajuan'];
                
                $surat_pengajuan = $_POST['surat_pengajuan'];

                $sql2 = "INSERT INTO pengajuan_sapi  (id_pengajuan, email_pengajuan, instansi_pengajuan, nama_pengajuan, nomor_pengajuan, sapi_pengajuan, jumlah_pengajuan, alasan_pengajuan, surat_pengajuan) VALUES (NULL,'$email_pengajuan','$instansi_pengajuan','$nama_pengajuan','$nomor_pengajuan','$sapi_pengajuan','$jumlah_pengajuan','$alasan_pengajuan','$surat_pengajuan')"; 

                $result = mysqli_query($con,$sql2);
            }
        
        ?>

    <form action="" method="POST" class="parent" style="margin-left:100px">
        <div class="form-grup">
            <table class="isian" >
                <tr class="baris"><td>email</td> <td><input type="text" name="email_pengajuan" required></td> </tr>
                <tr class="baris"><td>nama Instansi</td> <td><input type="text" name="instansi_pengajuan" required></td> </tr>
                <tr class="baris"><td>Nama</td> <td><input type="text" name="nama_pengajuan" required></td> </tr>
                <tr class="baris"><td>whatsapp</td> <td><input type="number" name="nomor_pengajuan" required></td> </tr>
                <tr class="baris"><td>jenisapi</td> <td><input type="text" name="sapi_pengajuan" required></td> </tr>
               
                <tr class="baris"><td>jumlah</td> <td><input type="text" name="jumlah_pengajuan" required></td> </tr>
                <tr class="baris"><td>tujuan</td> <td><input type="text" name="alasan_pengajuan" required></td> </tr>
           
                <tr class="baris"><td>surat</td> <td><input type="file" name="surat_pengajuan" required></td> </tr>
            </table>
            <input type="submit"  class="tombol-kuning" name="simpan" value="Simpan">
        </div>
    </form>
    
</body>
</html>