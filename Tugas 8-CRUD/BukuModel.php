<?php
require_once "Database.php";

class BukuModel extends Database {

    // tampil semua data
    public function getAll() {
        $sql = "SELECT * FROM buku ORDER BY id DESC";
        return $this->conn->query($sql);
    }

    // ambil data berdasarkan id
    public function getById($id) {
        $sql = "SELECT * FROM buku WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    // tambah data
    public function tambah($judul, $penulis, $tahun) {
        $sql = "INSERT INTO buku (judul, penulis, tahun) 
                VALUES ('$judul', '$penulis', '$tahun')";
        return $this->conn->query($sql);
    }

    // edit data
    public function ubah($id, $judul, $penulis, $tahun) {
        $sql = "UPDATE buku SET 
                judul='$judul',
                penulis='$penulis',
                tahun='$tahun'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    // hapus data
    public function hapus($id) {
        $sql = "DELETE FROM buku WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>
