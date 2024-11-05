<?php
// Koneksi ke database
$servername = "DESKTOP-8H0SDKA\SQLEXPRESS"; 
$username = ""; 
$password = ""; 
$dbname = "kontak_db"; 

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

// Ambil data kontak berdasarkan nomor telepon
if (isset($_GET['nomor_telepon'])) {
    $nomor_telepon = $_GET['nomor_telepon'];
    $sql = "SELECT * FROM kontak WHERE nomor_telepon = ?";
    $params = array($nomor_telepon);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $kontak = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
}

// Proses update kontak
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $sql = "UPDATE kontak SET nama = ? WHERE nomor_telepon = ?";
    $params = array($nama, $nomor_telepon);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo "Error: " . print_r(sqlsrv_errors(), true);
    } else {
        header("Location: index.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Kontak</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?php echo $kontak['nama']; ?>" required><br>
        Nomor Telepon: <input type="text" name="nomor_telepon" value="<?php echo $kontak['nomor_telepon']; ?>" readonly><br>
        <input type="submit" value="Update Kontak">
    </form>
</body>
</html>
