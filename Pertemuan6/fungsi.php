<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, Nama saya ".$nama. "<br/>";

    echo "Umur saya Adalah ". hitungUmur(2004,2024)."tahun";
    echo "Senang Berkenalan dengan Anda!! <br/>";
}
perkenalan("Kevin");




