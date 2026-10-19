<?php
$data = array (
    array ("001", "Dila", "Sistem Informasi", 86),
    array ("002", "Lina", "Sains Data", 87),
    array ("001", "Bima", "Rekayas Sistem Komputer", 88),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Mahasiswa</title>
</head>
<body>
  <h2>Data Mahasiswa</h2> 
  <table border = "1" cellpading = "10" cellspasing = "0">
  <tr>
  <th>No</th>
  <th>NIM</th>
  <th>Nama</th>
  <th>Program Studi</th>
  <th>Nilai</th>
  </tr>

  <?php
  for ($i = 0; $i < count ($data); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $data[$i][0] . "</td>";
    echo "<td>" . $data[$i][1] . "</td>";
    echo "<td>" . $data[$i][2] . "</td>";
    echo "<td>" . $data[$i][3] . "</td>";
    echo "</tr>";
    }
    ?>

</table> 

</body>
</html>