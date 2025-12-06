<?php
require_once "BukuModel.php";
$model = new BukuModel();
$id = $_GET['id'];
$data = $model->getById($id);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Edit Buku</title>
</head>
<body>

<h2>Edit Buku</h2>

<form method="POST">
<center>
    <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>
    <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required><br><br>
    <input type="text" name="tahun" maxlength="4" value="<?= $data['tahun'] ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</center>
</form>

<?php
if(isset($_POST['update'])){
    $model->ubah($id, $_POST['judul'], $_POST['penulis'], $_POST['tahun']);
    header("Location: index.php");
}
?>
</body>
</html>
