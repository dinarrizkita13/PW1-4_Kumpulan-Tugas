<?php
require_once "BukuModel.php";
$model = new BukuModel();

$id = $_GET['id'];
$model->hapus($id);

header("Location: index.php");
?>
