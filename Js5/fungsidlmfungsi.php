<?php
// Membuat fungsi hitungUmur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Membuat fungsi perkenalan
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Elok");

// Memanggil fungsi hitungUmur
echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
?>
