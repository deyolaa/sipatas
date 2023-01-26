<?php
include '../config.php'; 

$kode = $_GET['id_ikm'];
$sql5 = "DELETE FROM db_ikm WHERE id_ikm='$kode'";

$result = mysqli_query($con, $sql5);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='01ListIkm.php';</script>";
} else {
  echo mysqli_error($con);
}
?>