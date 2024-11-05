<?php
// Koneksi ke database
$servername = "DESKTOP-8H0SDKA\SQLEXPRESS"; 
$dbname = "kontak_db";
$username = ""; 
$password = ""; 
 
$connectionOptions = array(
    "Database" => $dbname,
    "UID" => $username,
    "PWD" => $password
);

// Buat koneksi
$conn = sqlsrv_connect($servername, $connectionOptions);

// Cek koneksi
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Proses hapus kontak
if (isset($_GET['nomor_telepon'])) {
    $nomor_telepon = $_GET['nomor_telepon'];
    $sql = "DELETE FROM kontak WHERE nomor_telepon = ?";
    $params = array($nomor_telepon);

    // Eksekusi query
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . print_r(sqlsrv_errors(), true);
    }
}

?>
