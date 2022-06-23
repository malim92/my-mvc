<?php
//public_html/msd/zostavax/view/restricted
$file = "$_SERVER[DOCUMENT_ROOT]/msd/zostavax/view/restricted/zostravax.html";

if (file_exists($file)) {
    // header('Content-Description: File Transfer');
    // header('Content-Type: text/html');
    // header('Content-Disposition: attachment; filename='.basename($file));
    // header('Content-Transfer-Encoding: binary');
    // header('Expires: 0');
    // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    // header('Pragma: public');
    // header('Content-Length: ' . filesize($file));
    // ob_clean();
    // flush();
    // file_get_contents($file);
    echo readfile($file);
    // exit;
}else{
    echo "file doesn't exist";
}
?>