<?php
    require_once "konfigurasi/koneksi.php";
    // 2. Buat Query
    $query = "SELECT user_id, name, username, password FROM users";

    // 3. Eksekusi Query
    $result = $connection->query($query);

    // 4. Ambil hasil query
    $users = [];
    while($user = $result->fetch_assoc()){
        array_push($users, $user);
    }

    $connection->close();
?>