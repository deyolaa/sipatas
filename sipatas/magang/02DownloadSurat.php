<?php
include '../config.php';

if (empty($_GET['suratmg'])) {
    $suratmg = basename($_GET['suratmg']);
    $filePath    ="files/".$suratmg;

    if (!empty($suratmg) && file_exists($filePath)) { /*check keberadaan file*/
        header("Content-Control:public");
        header("Content-Description: File Transfer");
        header("Content-Disposition:attachment; suratmg=$suratmg");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding:binary");

        readfile($filePath);
        exit;
    } else {
        echo "The File does not exist.";
    }
}
?>