<?php
require_once 'layout/header.php';
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

// Authentifier ?
if (!isset($_SESSION['id_user'])) {
    Utils::redirect('login.php');
}

if (isset($_GET['logout'])) {
    Utils::redirect('logout.php');
}

try {
    $pdo = new DbConnection;
} catch (PDOException) {
    Utils::redirect('admin.php?error=' . AppError::DB_CONNECTION);
}

$stmt = $pdo->query("SELECT * FROM article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="prose mx-auto mt-24">
    <h1>Admin</h1>

    <a href="?logout=1">Déconnexion</a>

    <table>
        <?php foreach ($articles as $article) { ?>
        <tr>
            <td> <?php echo $article['title'] ?></td>
            <td><a href="edit_article.php?id=<?php echo $article['id_article']?>">Modifier</a></td>
            <td><a href="delete_article.php?id=<?php echo $article['id_article']?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>
</main>

<?php require_once 'layout/footer.php';