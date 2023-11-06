<?php
require_once 'layout/header.php';
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

// Authentifier ?
if (!isset($_SESSION['user_id'])) {
    Utils::redirect('login.php');
}

$stmt = $pdo->query("SELECT * FROM article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="prose mx-auto">
    <h1>Admin</h1>

    <table>
        <?php foreach ($articles as $article) { ?>
        <tr>
            <td> <?php echo $article['title'] ?></td>
            <td><a href="edit_article.php?id=<?php echo $article['id']?>">Modifier</a></td>
            <td><a href="delete_article.php?id=<?php echo $article['id']?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>
</main>

<?php require_once 'layout/footer.php';