<?php
if (is_dir("file_uploads") === false) {
    mkdir("file_uploads");
}

$targetDir = realpath("file_uploads/");

if (isset($_FILES['fileToUpload']) && !empty($_FILES['fileToUpload']['name'])) {
        $fileBasename = $_FILES['fileToUpload']['name'];
        $fileParts = pathinfo($fileBasename);
        $ext = $fileParts['extension'];
        $filename = $fileParts['filename'];
        $hashFilename = md5($filename);
        $tmp = $_FILES['fileToUpload']['tmp_name'];
        $filePath = $targetDir.DIRECTORY_SEPARATOR.$hashFilename.'.'.$ext;

        $fileUpload = move_uploaded_file($tmp, $targetDir.DIRECTORY_SEPARATOR.$hashFilename.'.'.$ext);
        echo '<h3>Your file is sucessfully uploaded!</h3>';
}
?>
 

