<?php
require_once "BukuModel.php";
$buku = new BukuModel();
$data = $buku->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Buku Perpustakaan</title>

<script>
function confirmDelete(id) {
    if (confirm("Hapus data ini?")) {
        window.location = "hapus.php?id=" + id;
    }
}
</script>

</head>
<body>

<h2>Daftar Buku Perpustakaan</h2>

<a href="tambah.php" 
   style="display:inline-block;margin-left:15%;padding:10px 15px;background:#4CAF50;color:white;border-radius:6px;text-decoration:none;">
   + Tambah Buku
</a>

<table>
<tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Aksi</th>
</tr>

<?php while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $row["id"] ?></td>
    <td><?= $row["judul"] ?></td>
    <td><?= $row["penulis"] ?></td>
    <td><?= $row["tahun"] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>" style="color:blue;">Edit</a> |
        <a href="#" onclick="confirmDelete(<?= $row['id'] ?>)" style="color:red;">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
