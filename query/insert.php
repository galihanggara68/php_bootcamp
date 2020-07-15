<?php
    require_once "konfigurasi/koneksi.php";
    // 2. Buat Query
    $query = "INSERT INTO users(name, username, password) VALUES('Ucup', 'ucup123', 'admin')";

    // 3. Eksekusi Query
    $result = $connection->query($query);


    $connection->close();
?>