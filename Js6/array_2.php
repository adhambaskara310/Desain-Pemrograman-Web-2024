<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Dosen</title>
  <style>
    /* Mengatur gaya tabel */
    table {
      width: 50%;
      margin: 20px auto;
      border-collapse: collapse;
      text-align: left;
      background-color: white; /* Background tabel putih */
    }

    /* Mengatur border untuk tabel, th, dan td */
    table, th, td {
      border: 1px solid black;
    }

    /* Mengatur gaya header tabel */
    th {
      background-color: #f2f2f2;
      padding: 10px;
    }

    /* Mengatur padding dan warna baris */
    td {
      padding: 10px;
    }

    /* Efek hover pada baris */
    tr:hover {
      background-color: #d1e7dd;
    }
  </style>
</head>
<body>

  <h2 style="text-align: center;">Data Dosen</h2>

  <?php
  $Dosen = [
      'Nama' => 'Elok Nur Hamdana',
      'Domisili' => 'Malang',
      'Jenis Kelamin' => 'Perempuan'
  ];

  echo "<table>";
  echo "<tr><th>Label</th><th>Informasi</th></tr>";
  foreach ($Dosen as $label => $info) {
      echo "<tr>";
      echo "<td>{$label}</td>";
      echo "<td>{$info}</td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>

</body>
</html>
