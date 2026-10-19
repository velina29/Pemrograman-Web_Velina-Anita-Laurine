
<?php
$data = array (
    array ("001", "Dila", "Sistem Informasi", 86),
    array ("002", "Lina", "Sains Data", 87),
    array ("003", "Bima", "Rekayasa Sistem Komputer", 88),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: lightblue;
            padding: 10px;
        }

        td {
            padding: 8px;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
        }

        tr:hover {
            background-color: #eeeeee;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Nilai</th>
    </tr>

    <?php
    for ($i = 0; $i < count($data); $i++) {
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
