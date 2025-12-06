<?php require_once "BukuModel.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form method="POST">
<center>
    <input type="text" name="judul" placeholder="Judul Buku" required><br><br>
    <input type="text" name="penulis" placeholder="Penulis" required><br><br>
    <input type="text" name="tahun" maxlength="4" placeholder="Tahun" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</center>
</form>

<?php
if(isset($_POST['simpan'])){
    $model = new BukuModel();
    $model->tambah($_POST['judul'], $_POST['penulis'], $_POST['tahun']);
    header("Location: index.php");
}
?>
</body>
</html>
