<?php
include '../config.php'; 

$kode = $_GET['id_pengajuan'];
$sql5 = "DELETE FROM kunjungan WHERE id_pengajuan='$id_pengajuan'";

$result = mysqli_query($con, $sql5);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='03APTamu.php';</script>";
} else {
  echo mysqli_error($con);
}
?>