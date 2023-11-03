<?php
require_once 'layout/header.php';
require_once 'classes/DbConnection.php';

$idArticle = $_GET['id_article'];

$pdo = new DbConnection;

$stmt = $pdo->prepare("SELECT * FROM article WHERE id_article = :idArticle");
$stmt->bindParam(':idArticle', $idArticle, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<main class="prose mx-auto my-32 dark:text-white dark:border-gray-600 dark:focus:border-purple-500">';
    echo '<h1 class="text-center">' . $article['title'] . '</h1>';
    echo '<div class="article-content">';
    echo '<img src="' . $article['url_img'] . '" alt="Image de ' . $article['title'] . '"/>';
    echo '<p>' . $article['content'] . '</p>';
    echo '</div>';
    echo '</main>';
} else {
    echo "Article non trouvé.";
}

require_once 'layout/footer.php';
?>
