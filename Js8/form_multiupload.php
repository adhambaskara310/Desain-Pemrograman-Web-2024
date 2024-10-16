<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".jpeg, .png, .webp, .jpg">
        <input type="submit" value="Unggah">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lokasi penyimpanan file yang diunggah
        $targetDirectory = "documents/";

        // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        // Jika ada file yang diunggah
        if ($_FILES['files']['name'][0]) {
            // Hitung total file yang diunggah
            $totalFiles = count($_FILES['files']['name']);

            // Loop melalui semua file yang diunggah
            for ($i = 0; $i < $totalFiles; $i++) {
                $fileName = $_FILES['files']['name'][$i];
                $targetFile = $targetDirectory . $fileName;

                // Pindahkan file yang diunggah ke direktori penyimpanan
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    echo "File $fileName berhasil diunggah.<br>";
                } else {
                    echo "Gagal mengunggah file $fileName.<br>";
                }
            }
        } else {
            echo "Tidak ada file yang diunggah.";
        }
    }
    ?>
</body>
</html>
