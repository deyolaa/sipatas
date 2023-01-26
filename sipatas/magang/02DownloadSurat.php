<?php
include '../config.php';

if (isset($_GET['suratmg'])) {
    $suratmg = $_GET['suratmg'];
    $sql3 = "SELECT suratmg FROM permohonan_magang WHERE suratmg= '$suratmg'";
    $back_dir    ="assets/";
    $file = $back_dir.$_GET['suratmg'];
    $ctype = "application/octet-stream";
    if (!empty($file) && file_exists($file)) { /*check keberadaan file*/
        header("Pragma:public");
        header("Expired:0");
        header("Cache-Control:must-revalidate");
        header("Content-Control:public");
        header("Content-Description: File Transfer");
        header("Content-Type: $ctype");
        header("Content-Disposition:attachment; suratmg=\"" . basename($file) . "\"");
        header("Content-Transfer-Encoding:binary");
        header("Content-Length:" . filesize($file));
        flush();
        readfile($file);
        exit();
    } else {
        echo "The File does not exist.";
    }
}
?>