<?php
$targetDirectory = "uploads/"; // Directory to store the uploaded PDF file
$targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
$uploadOk = 1;
$pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the file is a PDF
if ($pdfFileType != "pdf") {
    echo "Only PDF files are allowed.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, the file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["pdfFile"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
