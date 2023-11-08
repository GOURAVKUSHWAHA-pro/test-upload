<?php
if (isset($_GET["name"])) {
    $fileName = $_GET["name"];
    $filePath = "hid/" . $fileName;

    if (file_exists($filePath)) {
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . $fileName . "\"");
        readfile($filePath);
    }
}
?>
