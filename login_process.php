<?php
require_once 'classes/ErrorEmails.php';
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    Utils::redirect('login.php');
}

[
    'email'    => $email,
    'password' => $password
] = $_POST;

try {
    $pdo = getConnection();
} catch (PDOException) {
    Utils::redirect('login.php?error=' . AppError::DB_CONNECTION);
}

$query = "SELECT * FROM users WHERE email = ?";

$connectStmt = $pdo->prepare($query);
$connectStmt->execute([$email]);

$user = $connectStmt->fetch();

if ($user === false) {
    Utils::redirect('login.php?error=' . AppError::USER_NOT_FOUND);
}

if (password_verify($password, $user['password'])) {
    $_SESSION['userInfos'] = [
        'id' => $user['id'],
        'email' => $email
    ];
    Utils::redirect('admin.php');
} else {
    Utils::redirect('login.php?error=' . AppError::INVALID_CREDENTIALS);
}
