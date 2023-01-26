<?php
include '../config.php'; 

$kode = $_GET['id_magang'];
$sql3 = "DELETE FROM absenmg WHERE id_magang= '$kode'";

$result = mysqli_query($con, $sql3);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='02AAbsen.php';</script>";
} else {
  echo mysqli_error($con);
}
?>