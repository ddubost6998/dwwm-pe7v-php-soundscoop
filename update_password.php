<?php

$db = new DbConnection;

$query = $db->query("SELECT * FROM user");
$users = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    $id = $user['id_user'];
    $password = $user['password'];

    if (!password_verify($password, $user['password'])) {

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $updateQuery = $db->prepare("UPDATE user SET password = :hashedPassword WHERE id_user = :id");
        $updateQuery->bindParam(':id', $id);
        $updateQuery->bindParam(':hashedPassword', $hashedPassword);
        $updateQuery->execute();
    }
}

echo "Mots de passe mis à jour avec succès.";
