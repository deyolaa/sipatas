<?php
include '../config.php';

    $uploads    = 'uploads/';
    $suratmg    = @$_GET['suratmg'];
    $attachment = $uploads . $suratmg;
 
    if (file_exists($attachment) && $suratmg) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; suratmg$suratmg='.basename($attachment));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: private');
        header('Pragma: private');
        header('Content-Length: ' . filesize($attachment));

        ob_clean();
        flush();
        readfile($attachment);
        
        exit;
    } else {
        echo 'File Not Found!';
    }
?>