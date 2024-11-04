<?php
// Koneksi ke database
$servername = "DESKTOP-8H0SDKA\SQLEXPRESS"; // Ganti dengan nama server Anda jika diperlukan
$dbname = "kontak_db";
$username = ""; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda jika ada
// Ganti dengan nama database Anda

$connectionOptions = array(
    "Database" => $dbname,
    "UID" => $username,
    "PWD" => $password
);

// Buat koneksi
$conn = sqlsrv_connect($servername, $connectionOptions);

// Cek koneksi
// Cek koneksi
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Tambah Kontak Baru</h2>
    <form method="post" action="create.php">
        Nama: <input type="text" name="nama" required><br>
        Nomor Telepon: <input type="text" name="nomor_telepon" required><br>
        <input type="submit" value="Tambah Kontak">
    </form>
    <br>

    <?php
    // Ambil semua kontak
    $sql = "SELECT * FROM kontak";
    $result = sqlsrv_query($conn, $sql);

    // Memeriksa apakah ada hasil yang dikembalikan
if (sqlsrv_has_rows($result)) {
    echo "<h2>Daftar Kontak</h2>";
    echo "<table border='1'>
            <tr>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>";
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['nama']) . "</td>
                <td>" . htmlspecialchars($row['nomor_telepon']) . "</td>
                <td>
                    <a href='update.php?nomor_telepon=" . urlencode($row['nomor_telepon']) . "'>Edit</a> | 
                    <a href='delete.php?nomor_telepon=" . urlencode($row['nomor_telepon']) . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus kontak ini?\")'>Hapus</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Tidak ada kontak yang ditemukan.</p>";
}

    sqlsrv_close($conn);
    ?>
</body>
</html>