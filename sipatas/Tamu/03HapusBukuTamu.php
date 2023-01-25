<?php
include '../config.php'; 

$kode = $_GET['id_tamu'];
$sql4 = "DELETE FROM tamu WHERE id_tamu= '$kode'";

$result = mysqli_query($con, $sql4);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='03ABukuTamu.php';</script>";
} else {
  echo mysqli_error($con);
}
?>