<?php
$a = 10;
$b = 5;

$hasilTambah = $a+$b;
$hasilKurang = $a-$b;
$hasilKali = $a*$b;
$hasilBagi = $a/$b;
$sisaBagi = $a%$b;
$pangkat = $a**$b;

echo "<br>";
echo "Nilai A : $a <br>";
echo "Nilai B : $b <br>";
echo "Hasil Tambah : $hasilTambah <br>";
echo "Hasil Kurang : $hasilKurang <br>";
echo "Hasil Kali : $hasilKali <br>";
echo "Hasil Bagi : $hasilBagi <br>";
echo "Hasil Sisa Bagi : $sisaBagi <br>";
echo "Hasil Pangkat : $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Nilai A : $a <br>";
echo "Nilai B : $b <br>";
echo "Hasil Sama : $hasilSama <br>";
echo "Hasil Tidak Sama : $hasilTidakSama <br>";
echo "Hasil Lebih Kecil  : $hasilLebihKecil <br>";
echo "Hasil Lebih Besar : $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama : $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama : $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Nilai A : $a <br>";
echo "Nilai B : $b <br>";
echo "Hasil And : $hasilAnd <br>";
echo "Hasil Or : $hasilOr <br>";
echo "Hasil Not A : $hasilNotA <br>";
echo "Hasil Not B : $hasilNotB <br>";

$jumlah = $a += $b;
$kurang = $a -= $b;
$kali = $a *= $b;
$bagi = $a /= $b;
$sisa = $a %= $b;

echo "<br>";
echo "Nilai A : $a <br>";
echo "Nilai B : $b <br>";
echo "Hasil Jumlah : $jumlah <br>";
echo "Hasil Kurang : $kurang <br>";
echo "Hasil Kali : $kali <br>";
echo "Hasil Bagi : $bagi <br>";
echo "Hasil Sisa : $sisa <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";
echo "Nilai A : $a <br>";
echo "Nilai B : $b <br>";
echo "Hasil Identik : $hasilIdentik <br>";
echo "Hasil Tidak Identik : $hasilTidakIdentik <br>";

$kursi = 45;
$suatuMalam = ($kursi - 28) * 100/100 ;

echo "<br>";
echo "Persentase Kursi Kosong : adalah $suatuMalam Persen";