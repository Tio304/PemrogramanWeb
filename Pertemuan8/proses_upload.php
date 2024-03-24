<?php
$targetDirectory = "documents/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['file']['name']) {
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDirectory . basename($fileName);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    } else {
        echo "Hanya file gambar yang diizinkan untuk diunggah (format: JPG, JPEG, PNG, GIF).<br>";
    }
} else {
    echo "Tidak ada file yang diunggah.<br>";
}
?>
