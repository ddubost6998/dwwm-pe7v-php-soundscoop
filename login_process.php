<?php
require_once 'classes/Utils.php';
require_once 'classes/AppError.php';
require_once 'classes/ErrorEmails.php';
require_once 'classes/DbConnection.php';

session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    Utils::redirect('login.php?error=' . AppError::AUTH_REQUIRED_FIELDS);
}

[
    'email'    => $email,
    'password' => $password
] = $_POST;

try {
    $pdo = new DbConnection;
} catch (PDOException) {
    Utils::redirect('login.php?error=' . AppError::DB_CONNECTION);
}

$query = "SELECT * FROM user WHERE email = ?";

$connectStmt = $pdo->prepare($query);
$connectStmt->execute([$email]);

$user = $connectStmt->fetch();
if ($user === false) {
    Utils::redirect('login.php?error=' . urlencode(AppError::USER_NOT_FOUND));
}

if ($user !== false && password_verify($password, $user['password'])) {
    $_SESSION['id_user'] = [
        'id_user' => $user['id_user'],
        'email'   => $email
    ];
    Utils::redirect('admin.php');
} else {
    Utils::redirect('login.php?error=' . urlencode(AppError::INVALID_CREDENTIALS));
}
