<?php
if (isset($_FILES["file"])) {
    $file = $_FILES["file"];
    if ($file["error"] === UPLOAD_ERR_OK) {
        move_uploaded_file($file["tmp_name"], "HIDScripts/" . $file["name"]);
    }
}
header("Location: index.php");
?>
