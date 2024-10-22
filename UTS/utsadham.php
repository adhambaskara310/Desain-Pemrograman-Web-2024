<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Mengatur agar layout sesuai dengan ukuran layar pengguna -->
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link ke Bootstrap CSS CDN untuk memanfaatkan framework Bootstrap -->
</head>

<body>
    <!-- Video bg dengan autoplay, mute, dan loop -->
    <video autoplay muted loop class="background-video">
        <source src="persona5bg.mp4" type="video/mp4">
    </video>

    <header>
        <div class="container">
            <img src="webtest.png" alt="Logo" width="200" height="40">
            <!-- Gambar yang ditampilkan di header -->
        </div>
    </header>

    <div class="boxundertext">
        <h2 class="abtme">Tentang saya</h2>
        <p class="belowabtme">Perkenalkan, saya Adham Baskara dari kelas 2H Prodi Teknik Informatika</p>

        <div class="address-grid">
            <h2>Alamat</h2>
            <p>Jl. Kembang Kertas No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
        </div>

        <!-- Daftar kontak menggunakan Bootstrap list group -->
        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active" aria-current="true" style="font-weight: bold;">
                Kontak Saya
            </button>
            <button type="button" class="list-group-item list-group-item-action">Email: adhambaskara2@gmail.com</button>
            <button type="button" class="list-group-item list-group-item-action">LinkedIn: Adham Baskara</button>
            <button type="button" class="list-group-item list-group-item-action">Github: adhambaskara310</button>
        </div>

        <!-- Section form kritik dan saran -->
        <div class="feedback-section">
            <?php
            // Bagian PHP untuk menampilkan hasil submit dari form
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $comment = htmlspecialchars($_POST['formkomentar']);
                echo "<p class='thank-you-message'>Terima kasih atas kritik dan sarannya: \"$comment\"</p>";
            }
            ?>
            <!-- Form untuk kritik dan saran -->
            <form method="post" action="">
                <label for="komentar" style="color: black;">Kritik dan Saran:</label>
                <textarea name="formkomentar" id="komentar" rows="4" required></textarea>
                <!-- Textarea untuk input komentar/kritik dan saran -->
                <input type="submit" value="Kirim" class="submit-btn">
                <!-- Tombol submit untuk mengirim form -->
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p class="tekspalingbawah">&copy; 2024 Adham Baskara. All rights reserved.</p>
        <!-- Teks footer dengan copyright -->
    </footer>

</html>
