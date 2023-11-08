<?php
if (isset($_GET["name"])) {
    $fileName = $_GET["name"];
    $filePath = "HIDScripts/" . $fileName;

    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            header("Location: index.php");
        } else {
            echo "Failed to delete the file.";
        }
    }
}
?>
