<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    if(empty($nama)){
        $errors[] = "Nama Harus diisi.";
    }

    if(empty($email)){
       $errors[] = "Email harus diisi";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Format Tidak Valid.";
    }

    if(!empty($errors)){
        foreach ($errors as $eror){
            echo $eror."<br>";
        }
    }
}