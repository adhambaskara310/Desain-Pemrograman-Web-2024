<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br><br>";

var_dump($e);

$SnilaiMatematika = 5.1;
$SnilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($SnilaiMatematika + $SnilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$SnilaiMatematika} <br>";
echo "IPA: {$SnilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br><br>";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';
echo $namaLengkap;

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>
