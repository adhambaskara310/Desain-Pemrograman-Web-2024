<!DOCTYPE html>
<html>
<head>
  <title>Data Mahasiswa</title>
</head>
<body>

  <h1>Data Mahasiswa Array Multidimensi</h1>

  <?php
  $mahasiswa = [
    [
      'Nama' => 'dina',
      'Nim' => '123456',
      'Jurusan' => 'teknik kimia',
      'Email' => 'dina@gmail.com'
    ],
    [
      'Nama' => 'dino',
      'Nim' => '9123124',
      'Jurusan' => 'teknik listrik',
      'Email' => 'dino@gmail.com'
    ]
  ];

  // Looping untuk menampilkan data mahasiswa
  foreach ($mahasiswa as $mhs) {
    echo "<ul>";
    echo "<li>Nama: " . $mhs['Nama'] . "</li>";
    echo "<li>Nim: " . $mhs['Nim'] . "</li>";
    echo "<li>Jurusan: " . $mhs['Jurusan'] . "</li>";
    echo "<li>Email: " . $mhs['Email'] . "</li>";
    echo "</ul>";
  }
  ?>

</body>
</html>