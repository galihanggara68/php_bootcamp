<?php
    // 1. Buat koneksi
    $connection = new mysqli("localhost", "root", "", "bootcamp");

    // Cek koneksi
    if($connection->connect_error){
        die("Koneksi Gagal");
    }
?>