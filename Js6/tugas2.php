<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styletugas2.css">
    </head>
    <body>
        <h2>Multidimensional Array</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
                $dtsiswa = array (
                    array("Andi", 15, '10A', "Malang"),
                    array("Siti", 16, '10B', "Batu"),
                    array("Budi", 15, '10A', "Dinoyo"),
                    array("Anton", 25, '15A', "Dinoyo")
                );

             
                
            echo "<tr>";
                echo "<td>" . $dtsiswa[0][0] . "</td>";
                echo "<td>" . $dtsiswa[0][1] . "</td>";
                echo "<td>" . $dtsiswa[0][2] . "</td>";
                echo "<td>" . $dtsiswa[0][3] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $dtsiswa[1][0] . "</td>";
                echo "<td>" . $dtsiswa[1][1] . "</td>";
                echo "<td>" . $dtsiswa[1][2] . "</td>";
                echo "<td>" . $dtsiswa[1][3] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $dtsiswa[2][0] . "</td>";
                echo "<td>" . $dtsiswa[2][1] . "</td>";
                echo "<td>" . $dtsiswa[2][2] . "</td>";
                echo "<td>" . $dtsiswa[2][3] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $dtsiswa[3][0] . "</td>";
                echo "<td>" . $dtsiswa[3][1] . "</td>";
                echo "<td>" . $dtsiswa[3][2] . "</td>";
                echo "<td>" . $dtsiswa[3][3] . "</td>";
            echo "</tr>";

            $totalUmur = 0;
            for ($i = 0; $i < count($dtsiswa); $i++) {
                $totalUmur += (int) $dtsiswa[$i][1]; // Pastikan tipe data umur adalah integer
            }

            $rataRataUmur = $totalUmur / count($dtsiswa);  // Hitung rata-rata
            ?>
        </table>
        <h2>Rata-rata umur siswa: <?php echo $rataRataUmur; ?></h2>
    </body>
</html>