<?php
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

// Authentifier ?
if (!isset($_SESSION['id_user'])) {
    Utils::redirect('login.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_article = $_POST['id'];
    $title      = $_POST['title'];
    $content    = $_POST['content'];
    $issue_date = $_POST['issue_date'];
    $user_id    = $_POST['user_id'];
    $url_img    = $_POST['url_img'];

    try {
        $pdo = new DbConnection;

        $stmt = $pdo->prepare("UPDATE article SET title = :title, content = :content, issue_date = :issue_date, user_id = :user_id, url_img = :url_img WHERE id_article = :id");
        $stmt->bindParam(':id', $id_article, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $stmt->bindParam(':issue_date', $issue_date, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':url_img', $url_img, PDO::PARAM_STR);
        $stmt->execute();

        Utils::redirect('admin.php?success=article_updated');
    } catch (PDOException $e) {
        echo "Une erreur s'est produite : " . $e->getMessage();
        exit;
    }
} else {
    Utils::redirect('error.php');
}
