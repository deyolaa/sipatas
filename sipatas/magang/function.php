<?php
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      function simpan_buktiabs($buktiabs){
        global $con;
        global $item_buktiabs;
        global $upload_dir;
        
        $sql="INSERT INTO tabel_buktiabs(buktiabs) VALUES (?,?)";
      
        if($stmt=mysqli_prepare($con, $sql)){
              mysqli_stmt_bind_param($stmt,"ss",$param_buktiabs);
              $param_buktiabs= $item_buktiabs;
           
                
              if(mysqli_stmt_execute($stmt)&&(move_uploaded_file($buktiabs, $upload_dir.$item_buktiabs))){
                $simpan=true;
                }else{
                $simpan=false;
                }
                 return $simpan;
        }
      
                mysqli_stmt_close($stmt);
      }

      function tampil_buktiabs(){
        global $koneksi;
        $sql = "SELECT id, nama, buktiabs FROM tabel_buktiabs order by id desc";
        $result = mysqli_query($koneksi, $sql);
        return $result;
}
?>