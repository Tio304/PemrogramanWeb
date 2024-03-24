<?php
if (isset($_POST["submit"])){
    #$targetDirectory = "uploads/";

    $targetDirectory = "documents/";
    $targetFile = $targetDirectory.basename($_FILES["documenToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    #$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    #$allowedExtensions = array("jpg","jpeg","png","gif");
    $allowedExtensions = array("txt","pdf","doc","docx");

    $maxFileSize = 10 *1024*1024;

    if(in_array($documentFileType,$allowedExtensions)&&$_FILES["fileToUpload"]["size"]<= $maxFileSize){
        if(move_uploaded_file($_FILES["documenToUpload"]["tmp_name"],$targetFile)){
            echo "Dokumen Berhasil Di Upload";
        } else{
            echo "Dokumen Gagal Di Upload";
        }
    }else{
        echo "File Dokumen tidak valid atau melebihi batas ukuran yang di tentukan";
    }
}