<?php
require_once "Buku.php";

$buku = new Buku();
$data = $buku->tampilData();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Buku Perpustakaan</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
    </tr>

    <?php while($row = $data->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['penulis']; ?></td>
            <td><?= $row['tahun']; ?></td>
        </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
