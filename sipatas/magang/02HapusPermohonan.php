<?php
include '../config.php'; 

$kode = $_GET['id_magang'];
$sql3 = "DELETE FROM permohonan_magang WHERE id_magang= '$kode'";

$result = mysqli_query($con, $sql3);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='02APermohonan.php';</script>";
} else {
  echo mysqli_error($con);
}
?>