<?php
    require_once "query/select.php";
?>

<table border="1">
    <thead>
        <th>User ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user["user_id"] ?></td>
                <td><?= $user["name"] ?></td>
                <td><?= $user["username"] ?></td>
                <td><?= $user["password"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>