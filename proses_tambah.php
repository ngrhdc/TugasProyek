<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat) VALUES ('$nim', '$nama', '$jk', '$alamat')";
    mysqli_query($koneksi, $query);
    header("Location: index.php");
}
?>