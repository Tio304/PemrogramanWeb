<?php

$umur =20;
if (isset($umur) && $umur >= 18){
    echo "Annda Sudah Dewasa";
} else{
    echo "ANda Belum dewasa atau variabel 'umur' tidak ditemukan";
}

$data  = array("nama" => "James" , "usia" => 20);
if (isset($data['nama'])){
    echo "Nama: ".$data["nama"];
} else{
    echo "Variabel 'nama' tidak ditemukan dalam array";
}