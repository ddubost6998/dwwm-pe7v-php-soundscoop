<?php

require_once 'classes/Utils.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Utils::redirect('login.php');
}

try {
    $pdo = getConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (`email`, `password`) VALUES (:email, :hashedPassword)";
    $stmtInsert = $pdo->prepare($query);

    $stmtInsert->execute([
        'email'          => $email,
        'hashedPassword' => $hashedPassword
    ]);
    Utils::redirect('login_success.php');
} catch (PDOException) {
    Utils::redirect('login.php?error=' . AppError::DB_CONNECTION);
}
