<?php
include '../config.php'; 

$kode = $_GET['id_tamu'];
$sql4 = "ALTER TABLE tamu DROP id_tamu='$id_tamu'";

$result = mysqli_query($con, $sql4);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='03ABukuTamu.php';</script>";
} else {
  echo mysqli_error($con);
}
?>