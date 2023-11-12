<?php
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

if (!isset($_SESSION['id_user'])) {
    Utils::redirect('login.php');
}

if (!isset($_GET['id'])) {
    Utils::redirect('admin.php');
}

try {
    $pdo = new DbConnection;
} catch (PDOException) {
    Utils::redirect('admin.php?error=' . AppError::DB_CONNECTION);
}

$articleId = $_GET['id'];

$deleteArticleArtistStmt = $pdo->prepare("DELETE FROM article_artist WHERE article_id = :id");
$deleteArticleArtistStmt->bindParam(':id', $articleId, PDO::PARAM_INT);
$deleteArticleArtistStmt->execute();

$deleteArticleCategorieStmt = $pdo->prepare("DELETE FROM article_categorie WHERE article_id = :id");
$deleteArticleCategorieStmt->bindParam(':id', $articleId, PDO::PARAM_INT);
$deleteArticleCategorieStmt->execute();

$deleteStmt = $pdo->prepare("DELETE FROM article WHERE id_article = :id");
$deleteStmt->bindParam(':id', $articleId, PDO::PARAM_INT);

if ($deleteStmt->execute()) {
    Utils::redirect('admin.php?success=article_deleted');
} else {
    Utils::redirect('admin.php?error=article_deletion_failed');
}
