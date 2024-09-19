<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan: $a + $b = $hasilTambah <br>";
echo "Hasil pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil perkalian: $a * $b = $hasilKali <br>";
echo "Hasil pembagian: $a / $b = $hasilBagi <br>";
echo "Sisa bagi: $a % $b = $sisaBagi <br>";
echo "Hasil pangkat: $a ** $b = $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah $a sama dengan $b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a tidak sama dengan $b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil dari $b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar dari $b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil atau sama dengan $b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar atau sama dengan $b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";

$a = 10;
$b = 5;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): " . ($hasilAnd ? "True" : "False") . "<br>";
echo "Hasil OR (a || b): " . ($hasilOr ? "True" : "False") . "<br>";
echo "Hasil NOT A (!a): " . ($hasilNotA ? "True" : "False") . "<br>";
echo "Hasil NOT B (!b): " . ($hasilNotB ? "True" : "False") . "<br>";

$a += $b;
echo "Hasil penambahan (a += b): $a <br>";

$a -= $b;
echo "Hasil pengurangan (a -= b): $a <br>";

$a *= $b;
echo "Hasil perkalian (a *= b): $a <br>";

$a /= $b;
echo "Hasil pembagian (a /= b): $a <br>";

$a %= $b;
echo "Sisa bagi (a %= b): $a <br>";

$a = 10;
$hasilPerbandingan = $a == $b;
echo "Apakah a sama dengan b (a == b)? " . ($hasilPerbandingan ? "Ya" : "Tidak") . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b (a === b)? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b (a !== b)? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";
?>
