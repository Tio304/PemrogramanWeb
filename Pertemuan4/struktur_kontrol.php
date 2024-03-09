<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik <90){
    echo "Nilai Huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai Huruf : C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai Huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari=0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo"<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah =0;

for($i =1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo"<br>";
echo "Jumlah Buah Yang akan di panen Adalah Sebanyak : $jumlahBuah";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo"<br>";
echo  "Total skor ujian adalah : $totalSkor";
echo"<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (lulus) <br>";
}

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
$length = count($nilaiSiswa);
for ($i = 2; $i < $length -2; $i++){
    $totalNilai += $nilaiSiswa[$i];
}
echo "Nilai rata rata Siswa: " . $totalNilai / ($length - 4);
echo "<br><br>";

$hargaProduct = 120000;
$pembelian = $hargaProduct;
$totalBayar = 0 ;

if ($pembelian > 100000){
    $totalBayar = $pembelian - ($pembelian * 0.2);
}

echo "Harga yang harus dibayar: $totalBayar";
echo "<br><br>";

$totalPoin = 560;
echo "Total skor pemain adalah: ($totalPoin) <br />";
echo "Apakah pemain mendapatkan hadiah tambahan? "
    . ($totalPoin > 500 ? "Ya" : "Tidak") . "<br />";
echo "<br>";