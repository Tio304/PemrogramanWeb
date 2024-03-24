<?php
/*
$pattern = '/[a-z]/';
$text = 'This is a Sample Text';

if(preg_match($pattern,$text)){
    echo " Huruf kecil Ditemukan ";
} else {
    echo "Tidak ada yang cocok";
}

$pattern = '/[0-9]+/';
$text = 'There is a T-34 Near me';

if(preg_match($pattern,$text, $matches)){
    echo "Cocokan : ".$matches[0];
} else {
    echo "Tidak ada yang cocok";
}

$pattern = '/apple/';
$replacement = 'Banana';
$text = 'I really like candied apple';
$new_text = preg_replace($pattern,$replacement,$text);
echo $new_text;
*/

$pattern = '/[go*d]{n,m}/';
$text = "All Mighty god is Allah, god is great";

if (preg_match($pattern,$text,$matches)){
    echo "Kecocokan : ".$matches[0];
} else {
    echo "Tidak ada yagn cocok";
}