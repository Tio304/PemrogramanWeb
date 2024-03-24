<?php
if(isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Menggunakan pathinfo untuk mendapatkan ekstensi file

    // Menentukan tipe file yang diizinkan untuk diunggah (hanya gambar)
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

    if (!in_array($file_ext, $allowed_types)) {
        $errors[] = "Hanya file gambar yang diizinkan untuk diunggah (format: JPG, JPEG, PNG, GIF)";
    }

    if($file_size > 2097152){
        $errors[] = 'Ukuran file tidak boleh lebih dari 2MB';
    }

    if(empty($errors)){
        // Jika tidak ada kesalahan, pindahkan file ke direktori yang ditentukan
        move_uploaded_file($file_tmp, "documents/".$file_name);
        echo "File berhasil diunggah";
    } else {
        // Jika ada kesalahan, tampilkan pesan kesalahan
        echo implode(" ", $errors);
    }
}
?>
