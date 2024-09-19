<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

for ($i = 0; $i < count($nilaiSiswa); $i++) {
    for ($j = $i + 1; $j < count($nilaiSiswa); $j++) {
        if ($nilaiSiswa[$i] > $nilaiSiswa[$j]) {
            // Tukar nilai
            $temp = $nilaiSiswa[$i];
            $nilaiSiswa[$i] = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $temp;
        }
    }
}

$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);

$totalNilai = 0;
foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}

$jumlahNilaiTersisa = count($nilaiSiswa);
$rataRata = $totalNilai / $jumlahNilaiTersisa;

echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah adalah: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan nilai tertinggi dan terendah adalah: " . round($rataRata, 2);
?>
