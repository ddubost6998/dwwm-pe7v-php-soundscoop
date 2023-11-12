<?php
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title      = $_POST['title'];
    $content    = $_POST['content'];
    $issue_date = $_POST['issue_date'];
    $user_id    = $_POST['user_id'];
    $url_img    = $_POST['url_img'];

    try {
        $pdo = new DbConnection;
        $stmt = $pdo->prepare("INSERT INTO article (title, content, issue_date, user_id, url_img) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $content, $issue_date, $user_id, $url_img]);
        Utils::redirect('admin.php');
    } catch (PDOException $e) {
        echo "Une erreur s'est produite : " . $e->getMessage();
    }
}
?>
