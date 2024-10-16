<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    foreach ($_FILES['file']['name'] as $key => $file_name) {
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];

        $file_name_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_name_parts));

        if (in_array($file_ext, $allowed_extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, atau GIF.";
        }

        // Cek ukuran file (max 2MB)
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB";
        }

        // Pindahkan file jika tidak ada error
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/".$file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>
