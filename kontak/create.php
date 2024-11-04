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

// Proses tambah kontak
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nomor_telepon = $_POST['nomor_telepon'];

    // Query untuk memasukkan data ke dalam tabel kontak
    $sql = "INSERT INTO kontak (nama, nomor_telepon) VALUES (?, ?)";
    $params = array($nama, $nomor_telepon);
    
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: ";
        print_r(sqlsrv_errors());
    }
}

sqlsrv_close($conn);
?>
