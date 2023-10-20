<?php

// koneksi ke database\
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$id_mahasiswa = $_POST['id_mahasiswa'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$semester_tempuh = $_POST['semester_tempuh'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$id_kelas = $_POST['id_kelas'];
$id_mahasiswa = $_POST['id_mahasiswa'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE('$id_mahasiswa', '$nama', '$nim', '$semester_tempuh', '$jenis_kelamin', '$id_kelas', '$id_prodi')");

// mengalihkan halaman kembali ke kelas.php
header("location: mahasiswa.php");
?>