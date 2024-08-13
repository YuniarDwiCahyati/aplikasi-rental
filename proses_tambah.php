<?php
include 'koneksi.php';

$id_mobil = $_POST['id_mobil'];
$nama_mobil = $_POST['nama_mobil'];
$warna = $_POST['warna'];
$tahun = $_POST['tahun'];
$id_kategori = $_POST['id_kategori'];

$sql = "INSERT INTO mobil (id_mobil, , plat, cc, tahun, id_jenis) VALUES ('$merk_mobil', '$warna', '$plat', $cc, $tahun, $id_jenis)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>